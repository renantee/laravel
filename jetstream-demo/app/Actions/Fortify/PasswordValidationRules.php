<?php

namespace App\Actions\Fortify;

use Laravel\Fortify\Rules\Password;

trait PasswordValidationRules
{
    /**
     * Get the validation rules used to validate passwords.
     *
     * @return array
     */
    protected function passwordRules()
    {
        $password = new Password;

        // Customize the password's requirements
        ($password)->length(10);

        // Require at least one uppercase character...
        ($password)->requireUppercase();

        // Require at least one numeric character...
        ($password)->requireNumeric();

        // Require at least one special character...
        ($password)->requireSpecialCharacter();

        return ['required', 'string', $password, 'confirmed'];
    }
}
