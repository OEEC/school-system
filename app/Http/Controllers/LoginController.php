<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
				// $credentials = $request->only('email', 'password');
				$credentials = $this->validate(request(), [
					'email' => 'email|required|string',
					'password' => 'required|string'
				]);

	
					if (Auth::attempt($credentials)) {
							//$request->session()->regenerate();

				 			return redirect()->intended('dashboard');
					}

					return back()->withErrors([
							'credencialsFail' => 'Email o password incorrecto.'
					])
					->withInput(Request(['email']));

    }

    public function logout(Request $request)
    {
        Auth::logout();

        // $request->session()->invalidate();

        // $request->session()->regenerateToken();

        return redirect('/');
    }
}