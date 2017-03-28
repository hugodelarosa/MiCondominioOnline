<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estate;
use App\User;
use App\Visitor;
use App\TypeOfVisitor;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $visitas = Visitor::orderBy('date_arrival', 'asc')->get();
        $condominos = User::all();
        $tipoVisita = TypeOfVisitor::all();
        //dd($visitas);
        return view('visitors.index')->with('data',$visitas)
                                     ->with('tipo',$tipoVisita)
                                     ->with('condo',$condominos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $condominos = Estate::all();
        $tipoVisita = TypeOfVisitor::all();
        return view('visitors.create')->with('estates',$condominos)
                                      ->with('tov',$tipoVisita);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $visita = new Visitor;
        $visita->name = $request->name;
        $visita->type_of_visitor_id = $request->type_of_visitor;
        $visita->date_arrival = $request->arrival;
        $visita->user_id = 3;
        $visita->vehicle = 0;
        if($request->vehicle != null) $visita->vehicle = 1;
        $visita->save();
        return redirect()->route('visitors.index')->with('success','Creado con éxito');
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
        Visitor::find($id)->delete();
        return redirect()->route('visitors.index')->with('success','Eliminado con éxito');
    }
}
