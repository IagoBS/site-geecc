<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Author;

class ProfileController extends Controller
{
    public function create()
    {
        $profile = Profile::all();
        $users = User::all();
        return view('createProfile', compact('profile', 'users'));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $profile = new Profile();
        $profile->about = $data['about'];
        $profile->facebook = $data['facebook'];
        $profile->twiiter = $data['twiiter'];
        $profile->instagram = $data['instagram'];
        $profile->avatar = store_file($request, 'image', 'image');
        if(!$profile->save()) {
            return redirect()->back()->withInput()->withErrors('Erro ao criar perfil');
        }
        return redirect()->route('news.index');
    }
    public function show($id)
    {
        return view('profileDetails', ['profile' => Profile::findOrFail($id)]);
    }
    public function edit($id)
    {
        return view('updateProfile', [
            'profile' => Profile::findOrFail($id),
            'users' => User::all()
            ]);
    }
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $profile = Profile::findOrFail($id);
       
        $profile->about = $data['about'];
        $profile->facebook = $data['facebook'];
        $profile->twiiter = $data['twiiter'];
        $profile->instagram = $data['instagram'];
        $profile->avatar = store_file($request, 'image', 'image');
        if(!$profile->save()) {
            return redirect()->back()->withInput()->withErrors('Erro ao editar perfil, tente novamente.');
        }
        return redirect()->route('news.index');
    }
    public function destroy($id)
    {
        $profile = Profile::findOrFail($id);
        if(!$profile->delete()) {
            return redirect()->back()->withInput()->withErrors("Erro ao deletar perfil");
        }
        return redirect()->route('news.index');
    }
}
