<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Throwable;

class AuthController extends Controller
{
    public function showregisterationform()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        DB::beginTransaction();
        try {
            $validated = $request->validated();
            $user = User::create($validated);
            $user->createToken('eleasing');
            DB::commit();
        } catch (Throwable $e) {
            DB::rollBack();
            report($e);
            return response([
                'error' => $e->getMessage(),
            ], 500);
        }
        return redirect()->route('login')->with('success', 'Registration Successful');
    }
    
    public function showloginform()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $validated = $request->validated();
        $user = Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']]);
        if ($user) {
            Auth::user();
            $request->user()->createToken('eleasing');

            return redirect()->route('admin.dashboard')->with('success', 'Login Successful');
        }
        return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
