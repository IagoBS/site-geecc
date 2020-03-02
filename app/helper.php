<?php

use App\Contact;
use Illuminate\Http\Request;

if(!function_exists('store_file')) {
    function store_file(Request $request, $fileName, $filePath) {
        if ($request->hasFile($fileName) && $request->file($fileName)->isValid()) {
            $name = uniqid(date('HisYmd'));
            $extension = $request->file($fileName)->extension();
            $filename = "{$name} . {$extension}";
            return $request->file($fileName)->storeAs($filePath, $filename);
        }
        return null;
    }
}

if(!function_exists('send_email')) {
    function send_email(Request $request) {
        $data = $request->all();
        $sendEmail = new Contact();
    }
}
if(!function_exists('token')) {
    function token($arr) {
        mt_rand(15, 50);
    }
}
