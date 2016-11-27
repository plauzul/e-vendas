<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller {

    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function authenticate(Request $request) {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed...
            return response()->json([
                'email' => $request->email,
                'step' => 'true',
                'redirect' => url('account')
            ]);
        } else {
            // Authentication does not passed...
            return response()->json([
                'step' => 'false',
                'redirect' => url('login')
            ]);
        }
    }

    /**
     * Method of logout
     * @return Response
     */
    public function logout() {
        Auth::logout();
    }
}
