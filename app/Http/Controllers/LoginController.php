<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateProductRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Console\Input\Input;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->withInput()->withErrors('Erro ao especificar email, tente novamente');
        }
        if(!filter_var($request->password, FILTER_FLAG_STRIP_LOW)) {
            return redirect()->back()->withInput()->withErrors('A senha específicada não está correta');
        }
        $credentials = $request->only([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);
        if (Auth::attempt($credentials)) {
            return redirect()->route('welcome');
        };
        return redirect()->back()->withInput()->withErrors('O campo não foi encontrado, tente novamennte');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
