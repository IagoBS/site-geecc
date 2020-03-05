<?php

namespace App\Http\Controllers;

session_start();

use App\Http\Requests\StoreRegister;
use App\News;
use App\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create()
    {
        return view('registro');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->about = $data['about'];
        $user->password = bcrypt($data['password']);
        
        $user->photo = store_file($request, 'photo', 'image');

        if (!$user->save()) {
            return redirect()->back()->withInput()->withErrors('Erro ao registrar usuário');
        }
        return redirect()->route('login');
    }
    public function show($slug)
    {
        return view('userDetails', ['user' => User::where('slug', '=', $slug)]);
    }
    public function edit($id)
    {
        return view("userEdit", ['user' => User::findOrFail($id)]);
    }
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $request->all();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->about = $data['about'];
        if (!$user->save()) {
            return redirect()->back()->withInput()->withErrors('Erro ao editar usuário');
        }
        return redirect()->route('news.index');
    }
    public function destroy($id)
    {
        $user  = News::findOrFail($id);
        if (!$user->delete()) {
            throw new \Exception('Não foi possível deletar usuário');
        }
        return redirect()->route('news.index');
    }
}
