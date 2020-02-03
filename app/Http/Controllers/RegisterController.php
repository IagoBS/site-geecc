<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class RegisterController extends Controller
{
    public function index()
    {
        return view('registro');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:30',
            'email' => 'required|min:10|max:150|email',
            'password' => 'required|min:6|max:50'
        ]);
        $data = $request->all();
        $user = new User;
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
         if($user->save()) {
             return redirect()->route('login.index');
         } else {
             return redirect()->back()->withInput()->withErrors('Erro ao cadastrar usuário.');
         }
    }
}
