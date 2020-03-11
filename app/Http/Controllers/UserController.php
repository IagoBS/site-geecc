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
    public function show($id)
    {
        return view(
            'userDetails',
            [
                'user' => User::findOrFail($id),
                'news' => News::with(['user', 'gallery', 'category'])->get()
            ]
        );
    }
    public function edit($id)
    {
        return view("userEdit", ['users' => User::findOrFail(auth()->user()->id)]);
    }
    public function update(Request $request, $id)
    {

        $user = Auth::user($id);
        $data = $request->all();
      
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->about = $data['about'];
        $user->type = $data['type'];
        if (!$user->save()) {
            return redirect()->back()->withInput()->withErrors('Erro ao editar usuário');
        }
        return redirect()->route('dashboard');
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
