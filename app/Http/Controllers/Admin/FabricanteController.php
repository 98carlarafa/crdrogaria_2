<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\FabricanteRequest;
use App\Models\Fabricante;

class FabricanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subtitulo = 'Lista de Fabricantes';
        $fabricantes = Fabricante::orderBy('nome', 'asc')->get();
        return view('admin.fabricantes.index', compact('subtitulo', 'fabricantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fabricantes = Fabricante::all();

        $action = route('admin.fabricantes.store');
        return view('admin.fabricantes.form', compact('action', 'fabricantes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FabricanteRequest $request)
    {
        Fabricante::create($request->all());
        $request->session()->flash('sucesso', "Fabricante $request->nome incluído com sucesso!");
        return redirect()->route('admin.fabricantes.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fabricante = Fabricante::find($id);
        $action = route('admin.fabricantes.update', $fabricante->id);
        return view('admin.fabricantes.form', compact('fabricante', 'action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FabricanteRequest $request, $id)
    {
        $fabricante = Fabricante::find($id);
        $fabricante->update($request->all());

        $request->session()->flash('sucesso', "Fabricante $request->nome alterado com sucesso!");
        return redirect()->route('admin.fabricantes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Fabricante::destroy($id);
        $request->session()->flash('sucesso', "Fabricante excluído com sucesso!");
        return redirect()->route('admin.fabricantes.index');
    }
}
