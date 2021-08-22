@extends('admin.layouts.principal')

@section('conteudo-principal')

    <section class="section">

        <table class="highlight">
            <thead>
                <tr>
                    <th class="center-align">Medicamentos</th>
                    <th class="center-align">Peso(mg)</th>
                    <th class="center-align">Quantidade</th>
                    <th class="center-align">Marca</th>
                    <th class="center-align">Fabricante</th>
                    <th class="center-align">Valor</th>
                    <th class="center-align">Opções</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($medicamentos as $medicamento)
                    <tr>
                        <td class="center-align">{{$medicamento->nome}}</td>
                        <td class="center-align">{{$medicamento->peso}}</td>
                        <td class="center-align">{{$medicamento->quantidade}}</td>
                        <td class="center-align">{{$medicamento->marca}}</td>
                        <td class="center-align">{{$medicamento->fabricante->nome}}</td>
                        <td class="center-align">{{$medicamento->valor}}</td>

                        <td class="center-align">

                            {{-- Ver --}}
                            <a href="{{route('admin.medicamentos.show', $medicamento->id)}}" title="ver">
                                <span>
                                    <i class="material-icons indigo-text text-darken-2">remove_red_eye</i>
                                </span>
                            </a>

                            {{-- Editar --}}
                            <a href="{{route('admin.medicamentos.edit', $medicamento->id)}}" title="editar">
                                <span>
                                    <i class="material-icons blue-text text-accent-2">edit</i>
                                </span>
                            </a>

                            {{-- Remover --}}
                            <form action="{{route('admin.medicamentos.destroy', $medicamento->id)}}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')

                                <button style="border: 0;background:transparent" type="submit" title="remover">
                                    <span style="cursor: pointer">
                                        <i class="material-icons red-text text-accent-3">delete</i>
                                    </span>
                                </button>
                            </form>


                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2"> Não existem medicamentos cadastrados</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-light" href="{{route('admin.medicamentos.create')}}">
                <i class="large material-icons">add</i>
            </a>
        </div>

    </section>

@endsection
