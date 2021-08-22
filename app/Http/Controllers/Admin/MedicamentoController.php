<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\MedicamentoRequest;
use App\Models\Fabricante;
use App\Models\Medicamento;

class MedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subtitulo = 'Lista de Medicamentos';
        $medicamentos = Medicamento::orderBy('nome', 'asc')->get();
        return view('admin.medicamentos.index', compact('subtitulo', 'medicamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fabricantes = Fabricante::all();
        $action = route('admin.medicamentos.store');
        return view('admin.medicamentos.form', compact('action', 'fabricantes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MedicamentoRequest $request)
    {
        Medicamento::create($request->all());
        $request->session()->flash('sucesso', "Medicamento $request->nome incluído com sucesso!");
        return redirect()->route('admin.medicamentos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicamento = Medicamento::with(['fabricante'])->find($id);

        //Chamar a view
        return view('admin.medicamentos.show', compact('medicamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $medicamento = Medicamento::find($id);
        $fabricantes = Fabricante::all();

        $action = route('admin.medicamentos.update', $medicamento->id);
        return view('admin.medicamentos.form', compact('medicamento', 'action', 'fabricantes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MedicamentoRequest $request, $id)
    {
        $medicamento = Medicamento::find($id);
        $medicamento->update($request->all());

        $request->session()->flash('sucesso', "Medicamento $request->nome alterado com sucesso!");
        return redirect()->route('admin.medicamentos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Medicamento::destroy($id);
        $request->session()->flash('sucesso', "Medicamento excluído com sucesso!");
        return redirect()->route('admin.medicamentos.index');
    }
}
