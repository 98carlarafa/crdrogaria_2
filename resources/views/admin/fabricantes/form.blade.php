@extends('admin.layouts.principal')

@section('conteudo-principal')

    <section class="section">

        <form action="{{$action}}" method="POST">

            {{-- cross-site request forgery csrf--}}
            @csrf
            @isset($fabricante)
                @method('PUT')
            @endisset

            <div class="input-field">

                {{-- Nome --}}
                <input type="text" name="nome" id="nome" placeholder="Nome" value="{{old('nome', $fabricante->nome ?? '')}}"/>
                @error('nome')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror


                {{-- CNPJ --}}
                <input type="text" name="cnpj" id="cnpj" placeholder="CNPJ" value="{{old('cnpj', $fabricante->cnpj ?? '')}}"/>
                @error('cnpj')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror


                {{-- Telefone --}}
                <input type="text" name="telefone" id="telefone" placeholder="Telefone" value="{{old('telefone', $fabricante->telefone ?? '')}}"/>
                @error('telefone')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror


                {{-- País --}}
                <input type="text" name="pais" id="pais" placeholder="País" value="{{old('pais', $fabricante->pais ?? '')}}"/>
                @error('pais')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror


                {{-- Cidade --}}
                <input type="text" name="cidade" id="cidade" placeholder="Cidade" value="{{old('cidade', $fabricante->cidade ?? '')}}"/>
                @error('cidade')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror


                {{-- Descrição --}}
                <input type="text" name="descricao" id="descricao" placeholder="Descrição" value="{{old('descricao', $fabricante->descricao ?? '')}}"/>
                @error('descricao')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror

            </div>

            <div class="right-align">
                <a class="btn-flat waves-effect" href="{{route('admin.fabricantes.index')}}">Cancelar</a>
                <button class="btn waves-effect waves-light" type="submit">
                    Salvar
                </button>
            </div>

        </form>
    </section>

@endsection
