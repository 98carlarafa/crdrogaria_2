@extends('admin.layouts.principal')

@section('conteudo-principal')

    <section class="section">

        <table class="highlight">
            <thead>
                <tr>
                    <th class="center-align">Fabricante</th>
                    <th class="center-align">CNPJ</th>
                    <th class="center-align">Telefone</th>
                    <th class="center-align">País</th>
                    <th class="center-align">Cidade</th>
                    <th class="center-align">Descrição</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($fabricantes as $fabricante)
                    <tr>
                        <td class="center-align">{{$fabricante->nome}}</td>
                        <td class="center-align">{{$fabricante->cnpj}}</td>
                        <td class="center-align">{{$fabricante->telefone}}</td>
                        <td class="center-align">{{$fabricante->pais}}</td>
                        <td class="center-align">{{$fabricante->cidade}}</td>
                        <td class="center-align">{{$fabricante->descricao}}</td>

                        <td class="right-align">

                            <a href="{{route('admin.fabricantes.edit', $fabricante->id)}}">
                                <span>
                                    <i class="material-icons blue-text text-accent-2">edit</i>
                                </span>
                            </a>

                            <form action="{{route('admin.fabricantes.destroy', $fabricante->id)}}" method="POST" style="display: inline;">
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
                        <td colspan="2"> Não existem Fabricantes cadastrados</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-light" href="{{route('admin.fabricantes.create')}}">
                <i class="large material-icons">add</i>
            </a>
        </div>

    </section>

@endsection
