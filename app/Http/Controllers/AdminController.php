<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
    *
    * Funcões de autenticação e home
    *  
    */
    public function login()
    {
        return view('admin/login');
    }

    public function index()
    {
        if (!session('user_logged')) {
            return redirect('/login');
        }

        return view('admin/index');
    }

    public function auth(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'senha' => 'required'
        ], [
            'email.required' => 'E-mail é obrigatório',
            'senha.required' => 'Senha é obrigatória'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->senha])) {
            $session = [
                'email' => $request->email
            ];

            session(['user_logged' => $session]);

            return redirect('/admin');
        } else {
            return back()->with('danger', 'E-mail ou senha inválidos');
        }
    }
    /**
    *
    * Funcões Condomínios
    *  
    */



    /**
    *
    *  Funcões Proprietarios
    *  
    */



    /**
    *
    *  Funcões Regiões
    *  
    */
}
