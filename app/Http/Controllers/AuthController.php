<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    // return a view for login
    public function index()
    {
        return view('auth.login');
    }

    // Handles user login
    public function authenticate(Request $request)
    {
        // Validate the request data
        $credentials = $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required|min:3',
            ],
            [
                'email.required' => 'Email é obrigatório.',
                'email.email' => 'Por favor, forneça um endereço de e-mail válido.',
                'password.required' => 'A senha é obrigatória.',
                'password.min' => 'A senha deve ter pelo menos :min caracteres.',
            ]
        );

        // check if existing email registered in database
        $user = Users::where('email', $credentials['email'])
            ->first();
        if (!$user) {
            // If the user does not exist, redirect back with an error message
            return back()->withErrors([
                'email' => 'Nenhum usuário encontrado com esse e-mail.',
            ]);
        }
        // verify the password
        if (!password_verify($credentials['password'], $user->password)) {
            // If the password is incorrect, redirect back with an error message
            return back()->withErrors([
                'password' => 'Dados inválidos. Verifique se o e-mail e a senha estão corretos.',
            ]);
        }
        // check if user is active
        if (!$user->is_active) {
            // If the user is not active, redirect back with an error message
            return back()->withErrors([
                'status' => 'Acesso negado. Por favor, entre em contato com o suporte.',
            ]);
        }

        // check if user is admin
        if ($user->is_admin) {
            // If the user is an admin, store the user in session
            $request->session()->put('user_admin', $user);
            return redirect()->route('home');
        } else {
            // If the user is not an admin, store the user in session
            $request->session()->put('user', $user);
            return redirect()->route('home');
        }

        // If login fails, redirect back with an error message
        return back()->withErrors([
            'email' => 'As credenciais fornecidas não correspondem aos nossos registros.',
        ]);
    }

    // Handles user logout
    public function logout()
    {
        session()->forget(['user', 'user_admin']);
        return redirect()->route('home');
    }

    // Displays the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }
}
