<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrationService
{
    public function createUser(array $userData): User
    {
        $userData['password'] = Hash::make($userData['password']);

        return User::create($userData);
    }
}
