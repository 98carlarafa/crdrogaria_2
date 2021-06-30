@extends('admin.layouts.principal')

@section('conteudo-principal')

    <section class="section">

        <table class="highlight">
            <thead>
                <tr>
                    <th class="center-align">Medicamentos</th>
                    <th class="center-align">Quantidade</th>
                    <th class="center-align">Valor</th>
                    <th class="center-align">Opções</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($medicamentos as $medicamento)
                    <tr>
                        <td class="center-align">{{$medicamento->nome}}</td>
                        <td class="center-align">{{$medicamento->quantidade}}</td>
                        <td class="center-align">{{$medicamento->valor}}</td>
                        <td class="center-align">Excluir</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2"> Não existem medicamentos cadastrados</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-light" href="{{route('admin.medicamentos.form')}}">
                <i class="large material-icons">add</i>
            </a>
        </div>

    </section>

@endsection
