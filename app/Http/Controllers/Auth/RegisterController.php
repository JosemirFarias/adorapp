<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{


    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'date_birth' => 'required|date',
            'function' => 'required|in:vocalist,instrumentist',
            'role' => 'nullable|array',
        ]);

        User::create($request->all());
        return redirect()->route('auth.login')->with('success', 'Usuário cadastrado com sucesso!');
    }
}
