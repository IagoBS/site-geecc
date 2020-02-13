<?php

namespace App\Http\Controllers;

use App\Category;
use App\Gallery;
use App\Http\Requests\StoreNews;
use App\News;
use App\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::with(['user', 'gallery', 'category'])->get();
        return view('news', compact('news'));
    }

    public function create()
    {
        $categories = Category::all();
        $authors = User::all();
        return view('createNews', compact('authors', 'categories'));
    }

    public function store(StoreNews $request)
    {

        $data = $request->all();
        $news = new News();
        $gallery = new Gallery();
        $news->user_id = $data['author'];
        $news->category_id = $data['category'];
        $news->title = $data['title'];
        $news->content = $data['content'];

        if (!$news->save()) {
            return redirect()->back()->withInput()->withErrors('Erro ao criar notícia');
        }

        $gallery->photo = store_file($request, 'image', 'image');

        if ($gallery->save()) {
            return redirect()->route('news.index');
        } else {
            return redirect()->back()->withInput()->withErrors('Erro ao enviar imagem');
        }
    }

    public function show($id)
    {
        return view('getIndex', ['news' => News::findOrFail($id)]);
    }
    public function edit($id)
    {
        return view('update', [
            'news' => News::findOrFail($id),
            'categories' => Category::all(),
            'authors' => User::all()
        ]);
    }
    public function update(Request $request, $id)
    {
        $data = $request->all();
        var_dump($data);
        $news = News::findOrFail($id);
        $news->title = $data['title'];
        $news->user_id = $data['author'];
        $news->category_id = $data['category'];
        $news->content = $data['content'];

        if (!$news->save()) {
            return redirect()->back()->withInput()->withErrors('Erro ao criar notícia');
        }
        if ($news->save()) {
            return redirect()->route('news.index');
        }
    }
    public function delete()
    {
        return view('delete');
    }
    public function destroy($id)
    {

        $news =  News::findOrFail($id);
        if (!$news->delete()) {
            return redirect()->back()->withInput()->withErrors('Erro ao deletar notícia, tente novamente');
        }
        return redirect()->route('news.index');
    }
}
