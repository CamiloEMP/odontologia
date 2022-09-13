<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        if (Auth::check()) {
            return to_route('appointment.index');
        }
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

        if (!Auth::validate($credentials)) {
            session()->flash('login_status', 'Correo o contraseña incorrectos');

            return to_route('auth.login');
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    public function authenticated(Request $request, $user)
    {
        $role = $user->getRoleNames();

        if ($role[0] === 'Admin') {
            return to_route('admin.index');
        } else {
            return to_route('appointment.index');
        }
    }
}
