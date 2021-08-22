@extends('admin.layouts.principal')

@section('conteudo-principal')

    <section class="section">

        <form action="{{$action}}" method="POST">

            {{-- cross-site request forgery csrf--}}
            @csrf
            @isset($medicamento)
                @method('PUT')
            @endisset

            <div class="input-field">

                {{-- Nome --}}
                <input type="text" name="nome" id="nome" placeholder="Nome" value="{{old('nome', $medicamento->nome ?? '')}}"/>
                @error('nome')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror


                {{-- Peso --}}
                <input type="text" name="peso" id="peso" placeholder="Peso" value="{{old('peso', $medicamento->peso ?? '')}}"/>
                @error('peso')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror


                {{-- Quantidade --}}
                <input type="number" name="quantidade" id="quantidade"  placeholder="Quantidade" value="{{old('quantidade', $medicamento->quantidade ?? '')}}"/>
                @error('quantidade')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror


                {{-- Marca --}}
                <input type="number" name="marca" id="marca"  placeholder="Marca" value="{{old('marca', $medicamento->marca ?? '')}}"/>
                @error('marca')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror


                {{-- Fabricante --}}

                    <div class="input-field">
                        <select name="fabricante_id" id="fabricante_id">
                            <option value="" disabled selected>Selecione um fabricante</option>

                            @foreach ($fabricantes as $fabricante)
                                <option value="{{$fabricante->id}}"
                                    {{old('fabricante_id', $medicamento->fabricante->id ?? '') == $fabricante->id ? 'selected' : '' }}
                                >{{$fabricante->nome}}</option>
                            @endforeach
                        </select>
                        <label for="fabricante_id">Fabricante</label>
                        @error('fabricante_id')
                            <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                        @enderror
                    </div>



                {{-- Valor --}}
                <input type="number" step=0.01 name="valor" id="valor" placeholder="Valor" value="{{old('valor', $medicamento->valor ?? '')}}"/>
                @error('valor')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror


            </div>

            <div class="right-align">
                <a class="btn-flat waves-effect" href="{{route('admin.medicamentos.index')}}">Cancelar</a>
                <button class="btn waves-effect waves-light" type="submit">
                    Salvar
                </button>
            </div>

        </form>
    </section>

@endsection
