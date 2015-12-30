<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Deparment;
use App\Employe;
use App\Http\Requests\EmployessRequest;
use Laracasts\Flash\Flash;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employe::orderBy('num_empleado', 'DESC')->get();
        
        $employees->each(function($employees) {
            $employees->deparment;
            
        });
 

        return view('employees.index')->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $employe = "";
        $deparments = Deparment::all()->lists('deparment', 'id')->toArray();
        asort($deparments);
        
        return view('employees.create')->with('deparments', $deparments)->with('employe', $employe);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployessRequest $request)
    {
        $employe = new Employe($request->all());
        $employe->save();

        Flash::success('Empleado registrado con exito!');
        return redirect()->route('employees.index');
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
    public function edit($num_empleado)
    {
        $employe = Employe::where('num_empleado', $num_empleado)->first();

        $deparments = Deparment::all()->lists('deparment', 'id')->toArray();
        asort($deparments);

        return view('employees.edit')->with('employe', $employe)->with('deparments', $deparments);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $num_empleado)
    {
        $employe = Employe::where('num_empleado', $num_empleado)->first();
        $employe->fill($request->all());

        $employe->save();
        Flash::success('Departamento editado con exito!');
        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($num_empleado)
    {
        $employe = Employe::where('num_empleado', $num_empleado)->first();
        $employe->delete();

        Flash::error('Empleado borrado con exito!');
        return redirect()->route('employees.index');
    }
}
