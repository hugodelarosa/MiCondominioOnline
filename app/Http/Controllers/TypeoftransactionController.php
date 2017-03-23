<?php

namespace App\Http\Controllers;

use App\TypeOfTransaction;
use Illuminate\Http\Request;

class TypeOfTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TypeOfTransaction::all();
        return view('typeoftransactions.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('typeoftransactions.create');
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
            'income/outcome' => 'required'
        ]);

        TypeOfTransaction::create($request->all());
        return redirect()->route('typeoftransactions.index')
                            ->with('success', 'Item created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TypeOfTransaction  $typeOfTransaction
     * @return \Illuminate\Http\Response
     */
    public function show(TypeOfTransaction $typeOfTransaction)
    {
        $typeOfTransaction = TypeOfTransaction::find($typeOfTransaction);
        return view('typeoftransaction.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypeOfTransaction  $typeOfTransaction
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeOfTransaction $typeOfTransaction)
    {
        $typeOfTransaction = TypeOfTransaction::find($typeOfTransaction);
        return view('typeoftransaction.edit', compact('typeoftransaction'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypeOfTransaction  $typeOfTransaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeOfTransaction $typeOfTransaction)
    {
        $this->validate($request, [
            'name' => 'required',
            'income/outcome' => 'required'
        ]);

        TypeOfTransaction::find($typeOfTransaction)->update($request->all());
        return redirect()->route('typeoftransactions.index')
                            ->with('success', 'Item created successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypeOfTransaction  $typeOfTransaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeOfTransaction $typeOfTransaction)
    {
        TypeOfTransaction::find($typeOfTransaction)->delete();
        return redirect()->route('typeoftransactions.index')
                        ->with('success', 'Item deleted successfully');
    }
}
