<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\StoreCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create() {
        return view('createCategory');
    }
    public function store(StoreCategory $request) {
        $data = $request->all();
        $category = new Category();
        $category->name = $data['name'];
        $category->slug = createSlug($data['name'], $category->id, 'categories');
        $category->save();
        return redirect()->route('dashboard');
    }
    public function edit($id) {
        return view('categoryEdit', ['category' => Category::findOrFail($id)]);
    }
    public function update(Request $request, $id) {
        $data = $request->all();
        $category = Category::findOrFail($id);
        $category->name = $data['name'];
        $category->save();
        return redirect()->route('list.category');
    }
    public function destroy($id) {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->route('list.category');
    }
}
