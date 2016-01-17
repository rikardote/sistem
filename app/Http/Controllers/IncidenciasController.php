<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
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
       $conteo_total = DB::raw('count(*) as total');
       $incidencias = Incidencia::getQuery()
                 ->select('*','employees.id as empleado_id','incidencias.id as inc_id' ,'qnas.year as qna_year','periodos.year as periodo_year','periodos.periodo as periodo_p', DB::raw($conteo_total))
                 ->leftJoin('employees', 'employees.id', '=', 'incidencias.employee_id')
                 ->leftJoin('qnas', 'qnas.id', '=', 'incidencias.qna_id')
                 ->leftJoin('periodos', 'periodos.id', '=', 'incidencias.periodo_id')
                 ->leftJoin('codigos_de_incidencias', 'codigos_de_incidencias.id', '=', 'incidencias.codigodeincidencia_id')
                 ->where('qna_id', '2')
                 ->groupBy('token')
                 ->get();
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

        $token = genToken();

        $fechaInicio=strtotime($incidencia->fecha_inicio);
        $fechaFin=strtotime($incidencia->fecha_final);

        for($i=$fechaInicio; $i<=$fechaFin; $i+=86400){
            $fecha_inicio = date("Y-m-d", $i);
            
            $incidencia->create([
                'qna_id'        => $request->qna_id,
                'employee_id'   => $request->employee_id,
                'fecha_inicio'  => $fecha_inicio,
                'fecha_final'   => $incidencia->fecha_final,
                'periodo_id'    => $request->periodo_id,
                'codigodeincidencia_id' => $request->codigodeincidencia_id,
                'token'         => $token,
                'created_at'    => date("Y-m-d H:i:s"),
                'updated_at'    => date("Y-m-d H:i:s"),
            ]);
        }     
        

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
    public function destroy($token)
    {
        $incidencias = Incidencia::where('token', $token)->get();
        //dd($incidencia);
        foreach ($incidencias as $incidencia) {
            $incidencia->delete();    
        }
        

        Flash::error('Incidencia borrada con exito!');
        return redirect()->route('incidencias.index');
    }
}
