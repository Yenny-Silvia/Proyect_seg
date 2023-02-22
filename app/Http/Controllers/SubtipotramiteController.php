<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subtipotramite;
use App\Models\Tipotramite;

class SubtipotramiteController extends Controller
{
    public function __constructor(){

        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
     public function byTipo($id)
    {
        $subtipotramite = Subtipotramite::where('id_tipotramite',$id)->get();
        return $subtipotramite;
    }

    public function index()
    {
        $subtipotramites = Subtipotramite::all();
        return view('subtipotramite.index')->with('subtipotramites', $subtipotramites);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $tipotramites = Tipotramite::all();
        return view('subtipotramite.create')->with('tipotramites',$tipotramites);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subtipotramites = new Subtipotramite();
        $subtipotramites->Nombre=$request->get('nombre');
        $subtipotramites->Sigla=$request->get('sigla');
        $subtipotramites->id_tipotramite=$request->get('id_tipotramite');

        $subtipotramites->save();
        return redirect('/subtipotramite');
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
        $subtipotramite = Subtipotramite::find($id);
        return view('subtipotramite.edit')->with('subtipotramite', $subtipotramite);
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
        $subtipotramite = Subtipotramite::find($id);
        $subtipotramite->Nombre=$request->get('nombre');
        $subtipotramite->Sigla=$request->get('sigla');
        $subtipotramite->id_tipotramite=$request->get('id_tipotramite');
       

        $subtipotramite->save();
        return redirect('/subtipotramite');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subtipotramite = Subtipotramite::find($id);
        $subtipotramite->delete();
        return redirect('/subtipotramite');
    }
}
