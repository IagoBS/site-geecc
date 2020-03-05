<?php

use App\Contact;
use App\Mail\ForgetPassword;
use App\News;
use Illuminate\Http\Request;

if(!function_exists('store_file')) {
    function store_file(Request $request, $fileName, $filePath) {
        if ($request->hasFile($fileName) && $request->file($fileName)->isValid()) {
            $name = uniqid(date('HisYmd'));
            $extension = $request->file($fileName)->extension();
            $filename = "{$name}.{$extension}";
            return $request->file($fileName)->storeAs($filePath, $filename);
        }
        return null;
    }
}

if(!function_exists('send_email')) {
    function send_email($user, $link) {
        Mail::send('email.resetPassword', ['user' => $user, 'link' => $link], function ($m) use($user) {
            $m->from('web@geec.org.br', 'Solitação para recuperar senha');

            $m->to($user->email, $user->name)
            ->subject('GEEC - solitação para recuperação de senha');
        });
    }
}
if(!function_exists('forget_password')) {
    function forget_password($user, $link) {
        // return new ForgetPassword($user);
        Mail::send(new ForgetPassword($user, $link));

    }
}
if(!function_exists('getRelatedSlugs')) {
    function getRelatedSlugs($slug, $id) {
        return News::select("slug")->where('slug', 'like', $slug . '%')
        ->where('id', '<>', $id)
        ->first();
    }
}
if(!function_exists('createSlug')) {
    function createSlug($title, $id) {
        $slug = Str::slug($title);
        $allSlug = getRelatedSlugs($slug, $id);
        if($allSlug !== null) {
            return;
        }

        // Just append numbers like a savage until we find not used.

        throw new \Exception('Não foi possível criar slug');
    }
}

