<?php

namespace App\Http\Controllers;

use App\Condo;
use Illuminate\Http\Request;

class CondoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Condo::all();
        return view('condo.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('condo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'direction' => 'required'
        ]);

        Condo::create($request->all());
        return redirect()->route('condo.index')
                        ->with('success', 'Item created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Condo  $condo
     * @return \Illuminate\Http\Response
     */
    public function show(Condo $condo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Condo  $condo
     * @return \Illuminate\Http\Response
     */
    public function edit(Condo $condo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Condo  $condo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Condo $condo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Condo  $condo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Condo $condo)
    {
        //
    }
}
