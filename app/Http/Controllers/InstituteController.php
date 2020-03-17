<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInstitute;
use App\Institute;
use App\News;
use App\Project;
use Illuminate\Http\Request;

class InstituteController extends Controller
{
    public function index()
    {
        $institutes = Institute::all();
        return view('institutos', compact('institutes'));
    }


    public function create()
    {
        $projects = Institute::all();
        return view('createInstitutos', compact('projects'));
    }

    public function store(StoreInstitute $request)
    {
        $data = $request->all();
        var_dump($data);
        $instituto = new Institute();
        $instituto->name = $data['name'];
        $instituto->email = $data['email'];
        $instituto->descripition = $data['descripition'];
        $instituto->logo = store_file($request, 'logo', 'logo');
        $instituto->slug = createSlug($data['name'], $instituto->id, 'institutes');
        if (!$instituto->save()) {
            return redirect()->back()->withInput()->withErrors('Erro ao enviar formulário, tente novamento');
        }

        return redirect()->route('institutos.index');
    }

    public function show($slug)
    {

        $data = [
            'institutes' => Institute::where('slug', $slug)->firstOrFail(),
            'news' =>  News::with(['user', 'gallery', 'category'])->where('category.slug', '=', )
        ];
        return view('institutosDetails', $data);
    }

    public function edit($id)
    {
        return view('EditInstitute', [
            'institutes' => Institute::findOrFail($id),
            'projects' => Project::all()
        ]);
    }


    public function update(Request $request, $id)
    {
        $data = $request->all();
        $institute = Institute::findOrFail($id);
        $institute->name = $data['name'];
        $institute->email = $data['email'];
        $institute->descripition = $data['descripition'];
        $institute->slug = createSlug($data['name'], $institute->id, 'institutes');
        $institute->logo = store_file($request, 'logo', 'logo');

        if (!$institute->save()) {
            return redirect()->back()->withInput()->withErrors('Erro ao editar instituto');
        }

        return redirect()->route('institutos.index');
    }


    public function destroy($id)
    {
        $institute = Institute::findOrFail($id);
        if (!$institute->delete()) {
            return redirect()->back()->withInput()->withErrors('Erro ao deletar instituto');
        }
        return redirect()->route('list.institute');
    }

}
