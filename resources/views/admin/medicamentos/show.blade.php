@extends('admin.layouts.principal')

@section('conteudo-principal')

    <section class="section">

        {{-- Medicamentos --}}
        <div class="row">
            <span class="col s12">
                <h5>Medicamento</h5>
                <p>{{$medicamento->nome}}</p>
            </span>
        </div>

        {{-- Peso --}}
        <div class="row">
            <span class="col s12">
                <h5>Peso(mg)</h5>
                <p>{{$medicamento->peso}}</p>
            </span>
        </div>

        {{-- Quantidade --}}
        <div class="row">
            <span class="col s12">
                <h5>Quantidade</h5>
                <p>{{$medicamento->quantidade}}</p>
            </span>
        </div>

        {{-- Marca --}}
        <div class="row">
            <span class="col s12">
                <h5>Marca</h5>
                <p>{{$medicamento->marca}}</p>
            </span>
        </div>

        {{-- Fabricante --}}
        <div class="row">
            <span class="col s12">
                <h5>Fabricante</h5>
                <p>{{$medicamento->fabricante->nome}}</p>
            </span>
        </div>

        {{-- Valor --}}
        <div class="row">
            <span class="col s12">
                <h5>Valor</h5>
                <p>{{$medicamento->valor}}</p>
            </span>
        </div>


        {{-- Voltar --}}
        <div class="right align">
            <a href="{{url()->previous()}}" class="btn-flat waves-effect">Voltar</a>
        </div>


    </section>

@endsection
