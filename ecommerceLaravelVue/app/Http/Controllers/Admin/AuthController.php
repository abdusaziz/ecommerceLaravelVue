<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\role;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function createUser(){

        $user = User::create([
            'name' => 'Shamim',
            'email'=> 'Shamim@gmail.com',
            'password' => Hash::make('1234'),
        ]);

        $admin = role::where('slag','admin')->first();
        
        $user->roles()->attach($admin);
    }

       
}
