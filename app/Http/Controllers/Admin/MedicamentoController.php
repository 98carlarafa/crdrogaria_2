<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\MedicamentoRequest;
use App\Models\Medicamento;

class MedicamentoController extends Controller
{
    public function medicamentos(){

        $subtitulo = 'Lista de Medicamentos';

        $medicamentos = Medicamento::all();

        return view('admin.medicamentos.index', compact('subtitulo', 'medicamentos'));
    }

    public function formAdicionar()
    {
        return view('admin.medicamentos.form');
    }

    public function adicionar(MedicamentoRequest $request)
    {

        //Criar um objeto do modelo (classe) Medicamento
        Medicamento::create($request->all());

        $request->session()->flash('sucesso', "Medicamento $request->nome incluído com sucesso!");

        return redirect()->route('admin.medicamentos.listar');
    }
}
