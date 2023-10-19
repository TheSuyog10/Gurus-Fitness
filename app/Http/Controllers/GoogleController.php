<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function loginWithGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function callBackFromGoogle(Request $request)
    {
        try {
            $user = Socialite::driver('google')->user();

            // Check if a user with the same email already exists
            $existingUser = User::where('email', $user->getEmail())->first();

            if ($existingUser) {
                // Update the existing user with Google ID
                $existingUser->update([
                    'google_id' => $user->getId(),
                ]);

                Auth::login($existingUser);
            } else {
                // Create a new user
                $newUser = User::create([
                    'google_id' => $user->getId(),
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'password' => Hash::make($user->getName() . rand(111111, 999999)),
                ]);

                Auth::login($newUser);
            }

            return redirect('/')->with('message', 'You are Logged In');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

}
