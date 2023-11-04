<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class GoogleAuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(Request $request)
    {
        $user = Socialite::driver('google')->user();

        // Check if the user already exists
        $existingUser = User::where('email', $user->email)->first();

        if ($existingUser) {
            // Log in the user
            auth()->login($existingUser);
        } else {
            // Extract the username value from the email before the '@' sign
            // $username = strtok($user->email, '@');
            $username = explode('@', $user->email)[0];

            // Create a new user
            $newUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'username' => $username,
                // 'password' => Hash::make('password'),
                'password' => $user->password,
            ]);

            // Log in the new user
            auth()->login($newUser);
        }

        return redirect('/dashboard');
    }
}
