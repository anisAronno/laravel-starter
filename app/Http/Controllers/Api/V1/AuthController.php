<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegistrationRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\URL;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
     * User login process.
     */
    public function login(LoginRequest $request): JsonResponse
    {
        $request->ensureIsNotRateLimited();

        $credentials = $request->only('email', 'password');

        if (! auth()->attempt($credentials)) {
            RateLimiter::hit($request->throttleKey());

            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        RateLimiter::clear($request->throttleKey());

        /** @var User $authenticatedUser */
        $authenticatedUser = auth()->user();

        if (! $authenticatedUser->hasVerifiedEmail()) {
            $verificationUrl = URL::temporarySignedRoute(
                'verification.notice',
                now()->addMinutes(60),
                ['user' => $authenticatedUser->id]
            );

            return response()->json([
                'success' => false,
                'message' => 'Email Not Verified! Please click the link to verify your email: '.$verificationUrl,
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Logged in successfully',
            'user'    => $authenticatedUser,
            'token'   => $authenticatedUser->createToken('token', ['expires_at' => now()->addDay()])->plainTextToken,
        ]);
    }

    /**
     * Handle an incoming registration request.
     */
    public function register(RegistrationRequest $request): JsonResponse
    {
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if ($user) {
            event(new Registered($user));

            return response()->json([
                'success' => true,
                'message' => 'Registration successful. Please check your email for verification.',
            ]);
        }

        return response()->json(['success' => false, 'message' => 'Something went wrong!']);
    }

    /**
     * User logout process.
     */
    public function logout(): JsonResponse
    {
        if (request()->user()->tokens()->delete()) {
            return response()->json(['success' => true, 'message' => 'Logout successful']);
        }

        return response()->json(['success' => false, 'message' => 'Something went wrong!']);
    }

    /**
     * User Profile Fetch.
     */
    public function profile(): JsonResponse
    {
        if (request()->user()) {
            return response()->json([
                'success' => true,
                'message' => 'User retrieve successful',
                'user'    => auth()->user(),
            ]);
        }

        return response()->json(['success' => false, 'message' => 'Something went wrong!']);
    }
}
