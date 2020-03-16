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

        return view('home', compact('news'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('createNews', compact('categories'));
    }

    public function store(Request $request)
    {

        $data = $request->all();

        $news = new News();
        $gallery = new Gallery();
        $news->user_id = auth()->user()->id;
        $news->category_id = $data['category'];
        $news->title = $data['title'];
        $news->content = $data['content'];
        $news->slug = createSlug($data['title'], $news->id, 'news');

        if (!$news->save()) {
            return redirect()->back()->withInput()->withErrors('Erro ao criar notícia');
        }

        $gallery->news_id = $news->id;
        $gallery->photo = store_file($request, "image", 'gallery');
        $gallery->save();

        return redirect()->route('news.index');
    }

    public function show($slug)
    {
        return view('getIndex', ['news' => News::where('slug', $slug)->firstOrFail()]);
    }

    public function edit($id)
    {
        return view('newsEdit', [
            'news' => News::findOrFail($id),
            'categories' => Category::all(),
            'authors' => User::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();

        $news = News::findOrFail($id);
        $news->title = $data['title'];
        $news->user_id = $data['author'];
        $news->category_id = $data['category'];
        $news->content = $data['content'];
        $news->slug = createSlug($data['title'], $news->id, 'news');
        
        return redirect()->route('news.index');
    }



    public function destroy($id)
    {
        $news =  News::findOrFail($id);
        $news->delete();
        return redirect()->route('list.news');
    }

}
