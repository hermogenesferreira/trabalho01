@extends('admin.layouts.principal')

@section('conteudo-principal')

    <section class="section">

        <table class="highlight">

            <thead>
                <tr>
                    <th>Componentes</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($componentes as $componente)
                    <tr>
                        <td>{{$componente}}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">Não existem componentes cadastrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </section>

@endsection
