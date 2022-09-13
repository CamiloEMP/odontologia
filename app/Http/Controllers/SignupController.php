<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignupRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignupController extends Controller
{
    public function show()
    {
        if (Auth::check()) {
            return to_route('appointment.index');
        } else {
            return view('auth.signup');
        }
    }

    public function store(SignupRequest $request)
    {
        // dump($request->all());
        $user = User::create($request->validated());

        session()->flash('login', 'Inicia Sesión para comprobar tus datos');

        return to_route('auth.login');
    }
}
