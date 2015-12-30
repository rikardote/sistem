<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\IncidenciasRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Employe;
use App\Deparment;
use App\Qna;
use App\Periodo;
use App\Incidencia;
use App\Codigo_De_Incidencia;

use Laracasts\Flash\Flash;


class IncidenciasController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incidencias = Incidencia::orderBy('id', 'DESC')->get();
        
        $incidencias->each(function($incidencias) {
            $incidencias->qna;
            $incidencias->employee;
            $incidencias->codigodeincidencia;
            $incidencias->periodo;
            
            
        });
        //dd($incidencias);

        return view('incidencias.index')->with('incidencias', $incidencias);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $incidencia = "";
        //$incidencias = Incidencia::all();
        $employees = Employe::all()->lists('num_empleado', 'id')->toArray();
        $qnas = Qna::all()->lists('qnaa', 'id')->toArray();
        $periodos = Periodo::all()->lists('periodoo', 'id')->toArray();
        $codigosdeincidencias = Codigo_De_Incidencia::all()->lists('codigo', 'id')->toArray();

        
        return view('incidencias.create')
            ->with('incidencia', $incidencia)
            ->with('qnas', $qnas)
            ->with('employees', $employees)
            ->with('periodos', $periodos)
            ->with('codigosdeincidencias', $codigosdeincidencias);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IncidenciasRequest $request)
    {
        $incidencia = new Incidencia($request->all());
        
        $incidencia->fecha_inicio = fecha_ymd($request->fecha_inicio);
        $incidencia->fecha_final = fecha_ymd($request->fecha_final);

        $incidencia->token = genToken();
                 
        $incidencia->save();

        Flash::success('Incidencia registrada con exito!');
        return redirect()->route('incidencias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($num_empleado)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $incidencia = Incidencia::find($id);
        //$incidencias = Incidencia::all();

        $employees = Employe::all()->lists('num_empleado', 'id')->toArray();
        $qnas = Qna::all()->lists('qnaa', 'id')->toArray();
        $periodos = Periodo::all()->lists('periodoo', 'id')->toArray();
        $codigosdeincidencias = Codigo_De_Incidencia::all()->lists('codigo', 'id')->toArray();

        
        return view('incidencias.edit')
            ->with('incidencia', $incidencia)
            ->with('qnas', $qnas)
            ->with('employees', $employees)
            ->with('periodos', $periodos)
            ->with('codigosdeincidencias', $codigosdeincidencias);
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
        $incidencia = Incidencia::find($id);
        
        $incidencia->fill($request->all());
        
        $incidencia->fecha_inicio = fecha_ymd($request->fecha_inicio);
        $incidencia->fecha_final = fecha_ymd($request->fecha_final);

        $incidencia->token = genToken();
       
        $incidencia->save();
        Flash::success('Incidencia editada con exito!');
        return redirect()->route('incidencias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $incidencia = Incidencia::find($id);
        $incidencia->delete();

        Flash::error('Incidencia borrada con exito!');
        return redirect()->route('incidencias.index');
    }
}
