<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Music;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return Music::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $music = new Music;
        $music->nome = $request->input('nome');
        $music->author = $request->input('author');
        $music->tom = $request->input('tom');
        $music->link = $request->input('link');
        $music->save();

        return $music;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return Music::find($id);
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
        $music = Music::find($id);

        $music->nome = $request->input('nome');
        $music->author = $request->input('author');
        $music->tom = $request->input('tom');
        $music->link = $request->input('link');
        $music->save();

        return $music;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $music = Music::find($id);
        $music->delete();

        return $music;
    }
}
