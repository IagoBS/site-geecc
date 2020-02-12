<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('projects', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createProject');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $project = new Project();
        $project->name = $data['name'];
        $project->about = $data['about'];
        $project->descripition = $data['descripition'];

        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            $name = uniqid(date('HisYmd'));
            $extension = $request->file('logo')->extension();
            $fileName = "{$name} . {$extension}";
            $project->logo =  $request->file('logo')->storeAs('logo', $fileName);
        }
        if (!$project->save()) {
            return redirect()->back()->withInput()->withErrors('Erro ao criar projeto');
        }
        return redirect()->route('projetos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('projectDetails', [
            'projects' => Project::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('projectEdit', [
            'projects' => Project::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $project = Project::findOrFail($id);
        $project->name = $data['name'];
        $project->about = $data['about'];
        $project->descripition = $data['descripition'];
        if($request->hasFile('logo') && $request->file('logo')->isValid()) {
            $name = uniqid(date('HisYmd'));
            $extension = $request->file('logo')->extension();
            $fileName = "{$name} . {$extension}";
            $project->logo = $request->file('logo')->storeAs('logo', $fileName);
        }
        if(!$project->save()) {
            return redirect()->back()->withInput()->withErrors('erro ao editar projeto');
        }
        return redirect()->route('projetos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        if(!$project->delete()) {
            return redirect()->back()->withInput()->withErrors('Erro ao editar projeto');
        }
        return redirect()->route('projetos.index');
    }
}
