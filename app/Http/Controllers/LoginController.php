<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $token = str()->random(32);
        $request->session()->put('token', $token);

        return view('login', [
            'token' => $token,
        ]);
    }
}
