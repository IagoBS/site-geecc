<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInstitute;
use App\Institute;
use App\Project;
use Illuminate\Http\Request;

class InstituteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $institutes = Institute::all();
        return view('institutos', compact('institutes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::all();
        return view('createInstitutos', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInstitute $request)
    {
        $data = $request->all();
        $instituto = new Institute();
        $instituto->name = $data['name'];
        $instituto->email = $data['email'];
        $instituto->descripition = $data['descripition'];
        $instituto->project_id = $data['project'];
        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            $name = uniqid(date('HisYmd'));
            $extesion = $request->logo->extension();
            $nameFile = "{$name} . {$extesion}";
            $instituto->logo = $request->file('logo')->storeAs('logo', $nameFile);
        }
        if(!$instituto->save()) {
            return redirect()->back()->withInput()->withErrors('Erro ao enviar formulário, tente novamento');
        }

            return redirect()->route('institutos.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('institutosDetails', ['institute' => Institute::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('updateInstitute', [
            'institutes' => Institute::findOrFail($id),
            'projects' => Project::all()
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
        $institute = Institute::findOrFail($id);
        $institute->name = $data['name'];
        $institute->email = $data['email'];
        $institute->project_id  = $data['project'];
        $institute->descripition = $data['descripition'];
        if($request->hasFile('logo') && $request->file('logo')->isValid()) {
            $name = uniqid(date('HisYmd'));
            $extesion = $request->file('logo')->extension();
            $nameFile = "{$name} . {$extesion}";
            $institute->logo = $request->file('logo')->storeAs('logo', $nameFile);
        }
        if(!$institute->save()) {
            return redirect()->back()->withInput()->withErrors('Erro ao editar instituto');
        }

         return redirect()->route('institutos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $institute = Institute::findOrFail($id);
        if(!$institute->delete()) {
            return redirect()->back()->withInput()->withErrors('Erro ao deletar instituto');
        }
    }
}
