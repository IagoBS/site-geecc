<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ForgetPasswordController extends Controller
{
    public function index()
    {
        return view('forgetpassword');
    }

    public function store(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        $user->token = md5(uniqid(rand(), true));
        $user->token_created_at = date("Y-m-d H:i:s", strtotime('+1 day'));
        $user->save();
        $link =  "http://127.0.0.1:8000" . '/recuperar-senha?token=' . $user->token ;

        forget_password($user, $link);
        return redirect()->back()->with('status', trans("Foi enviado um e-mail com a redefinição de senha"));
        // return var_dump($link);
    }

    public function edit(Request $request)
    {

        $token = $request->query('token');

        return view('forgetPasswordEdit', [
            'token' => $token
        ]);
    }

    public function update(Request $request)
    {
        $data = $request->all();

        $user = User::where('token', "=" ,$data['token'])->where('token_created_at', '>', 'NOW()')->first();
        $user->password = bcrypt($data['password']);
        $user->token = $data['token'];
        if(!$user->save()) {
            return redirect()->back()->withInput()->withErrors('Erro ao mudar senha, tente novamente');
        }
        Auth::logout();
        return redirect()->route('news.index');
    }
}
