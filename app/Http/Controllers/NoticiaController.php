<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Noticia;
use URL;

class NoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Noticia::all();
        return Inertia::render('Noticias', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Noticia::create(
            Request::validate([
                'titulo' => ['required', 'max:50'],
                'descripcion' => ['required'],
                'autor' => ['required']
            ])
        );
        return Redirect::route('Noticias');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Noticia::create($request->all());
        return redirect()->back()->with('message', 'Noticia creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Noticia $noticia)
    {
        return Inertia::render('Noticias/show', [
            'noticia' => $noticia
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Noticia $noticia)
    {
        return Inertia::render('Noticias/edit', [
                    'noticia' => $noticia
        ]);
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
        if ($request->has('id')) {
            Noticia::find($request->input('id'))->update($request->all());
            return redirect()->back()->with('message', 'Noticia modificada con exito.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if ($request->has('id')){
            Noticia::find($request->input('id'))->delete();
            return redirect()->back()->with('message', 'Noticia eliminada con exito.');
        }
    }
}
