<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Escala;
use Carbon\Carbon;

class EscalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return Escala::with('instrumentais', 'musicas', 'backs')->where('data_escala', '>', Carbon::now()->subdays(1))->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $escala = new Escala;
        $escala->data_escala = $request->input('data_escala');
        $escala->ministro = $request->input('ministro');
        $escala->save();

        return $escala;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return Escala::with('instrumentais', 'musicas', 'backs')->find($id);
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
        $escala = Escala::find($id);

        $escala->ministro = $request->input('ministro');
        $escala->backs()->detach();
        $escala->backs()->attach($request->input('backs'));
        $escala->musicas()->detach();
        $escala->musicas()->attach($request->input('musicas'));
        $escala->instrumentais()->detach();
        $escala->instrumentais()->attach($request->input('instrumentais'));
        $escala->save();

        return Escala::with('instrumentais', 'musicas', 'backs')->find($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $escala = Escala::find($id);
        $escala->delete();

        return $escala;
    }
}
