<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Auth\Passwords\PasswordBroker;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\Facades\DB;

class ForgetPasswordController extends Controller
{
    public function __construct(Guard $auth, PasswordBroker $passwords)
    {
        $this->auth = $auth;
        $this->passwords = $passwords;
        $this->middleware('guest');
    }
    public function index()
    {
        return view('forgetPassword');
    }
    public function store(Request $request)
    {
        $data = $request->all();

        $forget = DB::table('password_resets')
            ->join('users', $data['email'], '=', 'users.email')
            ->first()
            ->get();
        $forget->email = $data['email'];
        $forget->token =  mt_rand(1, 1000);
        if (!$forget->save()) {
            return redirect()->back()->withInput()->withErrors('Erro ao trocar senha');
        }

        if ($this->sendResetEmail($data['email'], $forget->token)) {
            return redirect()->back()->with('status', trans('Foi enviado um link no seu email'));
        } else {
            return redirect()->back()->withErrors(['error' => trans('Um erro ocorreu, tente novamente ou mais tarde')]);
        }

        return redirect()->route('forget.password');
    }

    public function sendResetEmail($email, $token) {
        $user = DB::table('users')->where('email', $email)->select('email')->first();
        $link = config('base_url') . 'password/reset/' . $token . '?email=' . urlencode($user->email);

        Mail::send('email.contactMail', ['send' => $sendEmail], function ($m) use ($sendEmail) {
            $m->from('web@geec.org.br', 'Geec');
            $m->to($sendEmail->email, $sendEmail->name)->subject('Contato GEEC - Grupo de Educação, Ética e Cidadania');
        });
    }
}
