<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInstitute;
use App\Institute;
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
        return view('institutos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createInstitutos');
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
        if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
            $name = uniqid(date('HisYmd'));
            $extesion = $request->logo->extension();
            $nameFile = "{$name} . {$extesion}";
            $instituto->logo = $request->file('logo')->storeAs('logo', $nameFile);
        }
        if(!$instituto->save()) {
            return redirect()->back()->withInput()->withErrors('Erro ao enviar formulário, tente novamento');
        }
        if($instituto->save()) {
            return redirect()->route('institutos.store');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
