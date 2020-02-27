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
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = auth()->user();
            $request->session()->put('admin', $user->type);
            return redirect()->route('dashboard');
        }
        return redirect()->back()->withInput()->withErrors('O campo não foi encontrado, tente novamennte');
    }

    public function logout(Request $request)
    {
        if (Auth::logout()) {

            return redirect()->route('login');
        }
        return redirect()->back()->withErrors('erro ao desconectar, tente novamente');
    }

}
