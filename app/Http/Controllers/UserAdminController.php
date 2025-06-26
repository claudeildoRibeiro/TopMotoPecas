<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class UserAdminController extends Controller
{
     public function index()
    {
        // Logic to list all users
        return view('admin.dashboard');
    }

    public function showUsers()
    {
        // Logic to show all users
        $users = Users::all();
        return view('users.index', compact('users'));
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
            'address' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',

            ],
            [
            'name.required' => 'O nome é obrigatório.',
            'email.required' => 'O e-mail é obrigatório.',
            'email.email' => 'Por favor, forneça um endereço de e-mail válido.',
            'password.required' => 'A senha é obrigatória.',
            'password.min' => 'A senha deve ter pelo menos :min caracteres.',
            'password.confirmed' => 'As senhas não coincidem.',
            'address.required' => 'O endereço é obrigatório.',
            'phone_number.required' => 'O telefone é obrigatório.',
    ]
    );
        // Logic to store the new user data
        $name = $request->input('name');
        $email = $request->input('email');
        $password = bcrypt($request->input('password'));
        $address = $request->input('address');
        $phone_number = $request->input('phone_number');

        // Here you would typically save the user to the database
        Users::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'address' => $address,
            'phone_number' => $phone_number,
            'is_active' => 1,
            'is_admin' => 0,
        ]);
        return redirect()->route('showUsers');
    }

    public function show($id)
    {
        // Decrypt the ID if necessary
        try {
            $id = Crypt::decrypt($id);
        } catch (\Exception $e) {
            return redirect()->route('users.index');
        }
        // Logic to show a specific user
        $user = Users::findOrFail($id);
        if (!$user) {
            return redirect()->route('users.index');
        }
        return view('users.show', compact('user'));
    }

    public function edit($id)
    {
        // Decrypt the ID if necessary
        try {
            $id = Crypt::decrypt($id);
        } catch (\Exception $e) {
            return redirect()->route('admin.dashboard');
        }
        // Logic to show the user edit form
        $user = Users::findOrFail($id);
        if (!$user) {
            return redirect()->route('users.index');
        }
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        // validate the request data
        $request->validate(
            [
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'address' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            ],
            [
            'name.required' => 'O nome é obrigatório.',
            'email.required' => 'O e-mail é obrigatório.',
            'email.email' => 'Por favor, forneça um endereço de e-mail válido.',
            'address.required' => 'O endereço é obrigatório.',
            'phone_number.required' => 'O telefone é obrigatório.',
            ]
        );
        // Decrypt the ID if necessary
        try {
            $id = Crypt::decrypt($id);
        } catch (\Exception $e) {
            return redirect()->route('admin.dashboard');
        }
        // Logic to update the user data
        $user = Users::findOrFail($id);
        if (!$user) {
            return redirect()->route('users.index');
        }
        $user->update($request->only(['name', 'email', 'address', 'phone_number']));
        return redirect()->route('users.show', Crypt::encrypt($user->id));
    }

    public function destroy($id)
    {
        // Logic to delete a user
        return redirect()->route('users.index');
    }
}
