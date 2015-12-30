<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\CodigosDeIncidenciasRequest;
use App\Codigo_De_Incidencia;
use Laracasts\Flash\Flash;

class CodigosDeIncidenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incidencias = Codigo_De_Incidencia::orderBy('code', 'ASC')->get();
       
        return view('codigosdeincidencias.index')->with('incidencias', $incidencias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $incidencia = "";

        return view('codigosdeincidencias.create')->with('incidencia', $incidencia);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CodigosDeIncidenciasRequest $request)
    {
        $incidencia = new Codigo_De_Incidencia($request->all());
        $incidencia->save();

        Flash::success('Incidencia creada con exito!');
        return redirect()->route('codigosdeincidencias.index');
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
    public function edit($code)
    {
        $incidencia = Codigo_De_Incidencia::where('code', $code)->first();

        return view('codigosdeincidencias.create')->with('incidencia', $incidencia);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $code)
    {
        $incidencia = Codigo_De_Incidencia::where('code', $code)->first();
        $incidencia->fill($request->all());

        $incidencia->save();
        Flash::success('Incidencia editada con exito!');
        return redirect()->route('codigosdeincidencias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($code)
    {
        $incidencia = Codigo_De_Incidencia::where('code', $code)->first();
        $incidencia->delete();

        Flash::error('Incidencia borrada con exito!');
        return redirect()->route('codigosdeincidencias.index');
    }
}