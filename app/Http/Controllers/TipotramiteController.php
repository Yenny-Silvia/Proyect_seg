<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipotramite;

class TipotramiteController extends Controller
{
    public function __constructor(){

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipotramites = Tipotramite::all();
        return view('tipotramite.index')->with('tipotramites', $tipotramites);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('tipotramite.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipotramites = new Tipotramite();
        $tipotramites->Nombre=$request->get('nombre');
        

        $tipotramites->save();
        return redirect('/tipotramite');
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
        $tipotramite = Tipotramite::find($id);
        return view('tipotramite.edit')->with('tipotramite', $tipotramite);
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
        $tipotramite = Tipotramite::find($id);
        $tipotramite->Nombre=$request->get('nombre');
       

        $tipotramite->save();
        return redirect('/tipotramite');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipotramite = Tipotramite::find($id);
        $tipotramite->delete();
        return redirect('/tipotramite');
    }
}
