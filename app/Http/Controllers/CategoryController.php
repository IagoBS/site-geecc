<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create() {
        return view('createCategory');
    }
    public function store(Request $request) {
        $data = $request->all();
        $category = new Category();
        $category->name = $data['name'];
        $category->save();
        return redirect()->route('dashboard');
    }
    public function edit() {

    }
    public function update() {

    }
    public function destroy() {

    }
}
