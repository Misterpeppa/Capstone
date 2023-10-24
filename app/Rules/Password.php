<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Password implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
                // Password must be at least 8 characters long.
        if (strlen($value) < 8) {
            $fail('Password must have 8 characters');
        }

        // Password must contain at least one uppercase letter.
        if (!preg_match('/[A-Z]/', $value)) {
            $fail('One uppercase letter required');
        }


        // Password must contain at least one numeric digit.
        if (!preg_match('/[0-9]/', $value)) {
            $fail('Provide atleast 1 digit');
        }

        // Password must contain at least one special character.
        if (!preg_match('/[^A-Za-z0-9\s]/', $value)) {
            $fail('Provide atleast 1 special character');
        }

    }
}
