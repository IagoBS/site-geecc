<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function upload(Request $request) {

        $request->file('image')->store('news');
    }
}
