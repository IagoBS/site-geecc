<?php
namespace App\Http\Controllers;

use App\Institute;
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
        $institutes = Institute::with('project')->get();
        return view('createProject', compact('institutes'));
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
        $project->institute_id = $data['institute'];
        $project->about = $data['about'];
        $project->descripition = $data['descripition'];
        $project->slug = createSlug($data['name'], $project->id, 'projects');

        $project->logo =  store_file($request, 'logo', 'logo');
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
    public function show($slug)
    {

        return view('projectDetails', [
            'projects' => Project::where('slug', $slug)->firstOrFail()]);
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
            'projects' => Project::findOrFail($id),
            'institutes' => Institute::with('project')->get()
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
        $project->institute_id = $data['institute_id'];
        $project->descripition = $data['descripition'];
        $project->logo = store_file($request, 'logo', 'logo');
        if(!$project->save()) {
            return redirect()->back()->withInput()->withErrors('erro ao editar projeto');
        }
        return redirect()->route('projetos.index');
    }


    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        if(!$project->delete()) {
            return redirect()->back()->withInput()->withErrors('Erro ao editar projeto');
        }
        return redirect()->route('list.project');
    }
}
