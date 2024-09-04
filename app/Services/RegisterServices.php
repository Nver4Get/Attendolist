<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class RegisterServices
{
    public function registerUser(array $data)
    {
        return User::create($data);
    }
}
