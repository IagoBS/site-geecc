<?php

namespace App\Http\Controllers;

use App\Institucional;
use App\QuemSomo;
use Illuminate\Http\Request;

class QuemSomosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $institucional = Institucional::all();
        return view('quemSomos', compact('institucional'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $institucional = Institucional::all();
        return view('quemSomosCreate', compact('institucional'));
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
        $institucional = new Institucional();
        $institucional->about = $data['about'];
        $institucional->mission = $data['mission'];
        $institucional->vision = $data['vision'];
        $institucional->values = $data['values'];
        if (!$institucional->save()) {
            return redirect()->back()->withInput()->withErrors('Erro ao criar quem somos, tente novamente');
        }
        return redirect()->route('institucional.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $institucional = Institucional::all();
        return null;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return view('quemSomosEdit', [
            'institucional' => Institucional::findOrFail($id)
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
        $institucional = Institucional::findOrFail($id);
        $institucional->about = $data['about'];
        $institucional->mission = $data['mission'];
        $institucional->values = $data['vision'];
        $institucional->values = $data['values'];
        if (!$institucional->save()) {
            return redirect()->back()->withInput()->withErrors('Erro ao editar quem somos');
        }
        return redirect()->route('institucional.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $institucional = Institucional::findOrFail($id);
        if (!$institucional->delete()) {
            return redirect()->back()->withInput()->withErrors('Erro ao deletar quem somos');
        }
        return redirect()->route('institucional.index');
    }
}
