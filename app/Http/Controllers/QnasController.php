<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;

use App\Qna;

class QnasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qnas = Qna::orderBy('qna', 'ASC')->get();
       
        return view('qnas.index')->with('qnas', $qnas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $qna = "";

        return view('qnas.create')->with('qna', $qna);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $qna = new Qna($request->all());
        $qna->save();

        Flash::success('Qna creada con exito!');
        return redirect()->route('qnas.index');
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
        $qna = Qna::find($id);

        return view('qnas.edit')->with('qna', $qna);
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
        $qna = Qna::find($id);
        $qna->fill($request->all());

        $qna->save();
        Flash::success('Qna editada con exito!');
        return redirect()->route('qnas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $qna = Qna::find($id);
        $qna->delete();

        Flash::error('qna borrada con exito!');
        return redirect()->route('qnas.index');
    }
}
