<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Gallery;
use App\Institute;
use App\News;
use App\User;

class ListController extends Controller
{
    public function news() {
        $news = News::with(['user', 'gallery', 'category'])->get();
        return view('newsLista', compact('news'));
    }
    public function institute() {
        $institutes = Institute::all();
        return view('institutosList', compact('institutes'));
    }
}
