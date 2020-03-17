<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Gallery;
use App\Institute;
use App\News;
use App\Project;
use App\User;

class ListController extends Controller
{
    public function news() {
        $news = News::with(['user', 'gallery', 'category'])->get();
        return view('listanews', compact('news'));
    }
    public function institute() {
        $institutes = Institute::all();
        return view('listaInstitutos', compact('institutes'));
    }
    public function projets() {
        $projects = Project::all();
        return view('listaProjetos', compact('projects'));
    }
    public function user() {
        $users = User::all();
        return view('listaUsuarios', compact('users'));
    }
    public function category() {
        $categories = Category::all();
        return view('listaCategoria', compact('categories'));
    }
}
