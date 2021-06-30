@extends('admin.layouts.principal')

@section('conteudo-principal')

    <section class="section">

        <form action="{{route('admin.medicamentos.adicionar')}}" method="POST">

            {{-- cross-site request forgery csrf--}}
            @csrf

            <div class="input-field">
                <input type="text" name="nome" id="nome" placeholder="Nome"/>
                @error('nome')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror


                <input type="number" name="quantidade" id="quantidade"  placeholder="Quantidade"/>
                @error('quantidade')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror
                

                <input type="number" step=0.01 name="valor" id="valor" placeholder="Valor"/>
                @error('valor')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror              
                
                
            </div>

            <div class="right-align">
                <a class="btn-flat waves-effect" href="{{url()->previous()}}">Cancelar</a>
                <button class="btn waves-effect waves-light" type="submit">
                    Salvar
                </button>
            </div>

        </form>
    </section>

@endsection
