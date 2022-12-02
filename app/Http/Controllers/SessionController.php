<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create() {
        return view('login');
    }

    public function store() {
        $attributes = request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if (auth()->attempt($attributes)) {
            redirect('admin');
        }

        return back()->withErrors([
            'email' => 'Не указан email или указан не верно',
            'password' => 'Не указан пароль или указан неверно'
        ]);
    }

    public function destroy() {
        auth()->logout();
        return redirect('/');
    }
}
