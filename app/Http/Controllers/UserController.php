<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Logic to list all users
        return view('admin.dashboard');
    }

    public function create()
    {
        // Logic to show the user creation form
        return view('users.create');
    }

    public function store(Request $request)
    {
        // validate the request data
        $request->validate(
            [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'endereco' => 'required|string|max:255',
            'telefone' => 'required|string|max:15',

            ],
            [
            'name.required' => 'O nome é obrigatório.',
            'email.required' => 'O e-mail é obrigatório.',
            'email.email' => 'Por favor, forneça um endereço de e-mail válido.',
            'password.required' => 'A senha é obrigatória.',
            'password.min' => 'A senha deve ter pelo menos :min caracteres.',
            'password.confirmed' => 'As senhas não coincidem.',
            'endereco.required' => 'O endereço é obrigatório.',
            'telefone.required' => 'O telefone é obrigatório.',
    ]
    );
        return redirect()->route('users.index');
    }

    public function show($id)
    {
        // Logic to show a specific user
        return view('users.show', compact('id'));
    }

    public function edit($id)
    {
        // Logic to show the user edit form
        return view('users.edit', compact('id'));
    }

    public function update(Request $request, $id)
    {
        // Logic to update the user data
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        // Logic to delete a user
        return redirect()->route('users.index');
    }
}
