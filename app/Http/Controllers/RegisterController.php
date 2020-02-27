<?php

namespace App\Http\Controllers;

session_start();

use App\Http\Requests\StoreRegister;
use App\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('registro');
    }

    public function store(StoreRegister $request)
    {
        $data = $request->all();
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);

        if (!$user->save()) {
            return redirect()->back()->withInput()->withErrors('Erro ao registrar usuário');
        }
        return redirect()->route('login.index');
    }
}
