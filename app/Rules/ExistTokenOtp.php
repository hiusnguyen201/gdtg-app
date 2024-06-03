<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use App\Models\User_Otp;

class ExistTokenOtp implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!str_contains($value, "|")) {
            $fail('The :attribute không hợp lệ');
        }

        [$id, $token] = explode("|", $value);
        $user_otp = User_Otp::find($id);

        if (!$user_otp || !hash_equals($user_otp->token, hash('sha256', $token))) {
            $fail('The :attribute không hợp lệ');
        }
    }
}
