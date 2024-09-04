<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class RegisterServices
{
    public function registerUser(array $data)
    {
        $data['password'] = Hash::make($data['password']);
        return User::create($data);
    }
}
