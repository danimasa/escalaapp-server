<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Instrumental;

class InstrumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return Instrumental::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $instrument = new Instrumental;
        $instrument->funcao = $request->input('funcao');
        $instrument->nome = $request->input('nome');
        $instrument->save();

        return $instrument;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return Instrumental::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $instrument = Instrumental::find($id);

        $instrument->funcao = $request->input('funcao');
        $instrument->nome = $request->input('nome');
        $instrument->save();

        return $instrument;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $instrument = Instrumental::find($id);
        $instrument->delete();

        return $instrument;
    }
}
