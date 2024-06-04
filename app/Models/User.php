<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use App\Models\User_Otp;
use App\Jobs\SendOtpJob;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'role_id',
        'status',
        'balance',
        'email_verified_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'name' => 'string',
            'email' => 'string',
            'phone' => 'string',
            'role_id' => 'integer',
            'balance' => 'integer',
            'status' => 'integer'
        ];
    }

    public function getOtp()
    {
        return $this->hasOne(User_Otp::class);
    }

    public function generateOtpToken()
    {
        return
            sprintf('%s%s%s', '', $tokenEntropy = Str::random(40), hash('crc32b', $tokenEntropy));
    }

    public function createOtp($token)
    {
        User_Otp::where("user_id", $this->getKey())->delete();

        $new_otp = rand(100000, 999999);
        $user_otp = User_Otp::create([
            "otp" => $new_otp,
            "token" => hash('sha256', $token),
            "user_id" => $this->getKey(),
            "expire_at" => now()->addMinutes((int)env("OTP_MINUTES_EXPIRED", 1))
        ]);

        return $user_otp;
    }

    public function sendOtp($otp)
    {
        $details = ["email" => $this->email, "otp" => $otp];
        SendOtpJob::dispatch($details);
    }

    public function verifyOtp($otp)
    {
        $user_otp = $this->getOtp;
        if ($user_otp->otp != $otp) {
            return [false, array(
                'type' => 'handle',
            )];
        }

        if (now()->gt($user_otp->expire_at)) {
            return [false, array(
                'type' => 'handle',
                'url' => route("login.render")
            )];
        }

        $user_otp->delete();

        if (!$this->email_verified_at) {
            $this->update([
                'email_verified_at' => now()
            ]);
        }

        return [true, null];
    }

    public function resendOtp()
    {
        $user_otp = $this->getOtp;
        $new_otp = rand(100000, 999999);

        $user_otp->update([
            "expire_at" => now()->addMinutes((int)env("OTP_MINUTES_EXPIRED", 1)),
            "otp" => $new_otp,
        ]);

        $this->sendOtp($new_otp);

        return $user_otp;
    }
}
