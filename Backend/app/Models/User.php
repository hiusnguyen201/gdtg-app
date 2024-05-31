<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use App\Models\User_Otp;
use App\Jobs\SendOtpJob;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
        ];
    }

    public function getOtp()
    {
        return $this->hasOne(User_Otp::class);
    }

    public function sendOtp(): void
    {
        $user_otp_existed = User_Otp::where(["user_id" => $this->id])->first();
        if ($user_otp_existed) $user_otp_existed->delete();

        $otp = rand(100000, 999999);
        User_Otp::create([
            "otp" => $otp,
            "user_id" => $this->id,
            "expire_at" => now()->addMinutes((int)env("OTP_MINUTES_EXPIRED", 1))
        ]);

        $details = ["email" => $this->email, "otp" => $otp];
        // SendOtpJob::dispatch($details);
    }
}
