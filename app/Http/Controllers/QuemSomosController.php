<?php

namespace App\Http\Controllers;

use App\Institucional;
use App\QuemSomo;
use Illuminate\Http\Request;

class QuemSomosController extends Controller
{

    public function index()
    {
        $institucional = Institucional::all();
        return view('quemSomos', compact('institucional'));
    }

    public function create()
    {

        $institucional = Institucional::all();
        return view('quemSomosCreate', compact('institucional'));
    }

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

   

    public function edit($id)
    {
        return view('quemSomosEdit', [
            'institucional' => Institucional::findOrFail($id)
        ]);
    }

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

    public function destroy($id)
    {
        $institucional = Institucional::findOrFail($id);
        if (!$institucional->delete()) {
            return redirect()->back()->withInput()->withErrors('Erro ao deletar quem somos');
        }
        return redirect()->route('institucional.index');
    }
}
