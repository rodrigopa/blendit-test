@extends('layout-auth')

@section('title', 'Turmas')

@section('content')

    <a href="{{route('classes.create')}}" class="btn btn-primary mb-4">Nova turma</a>

    <table class="table">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Turno</th>
            <th>Vagas</th>
            <th>Ano letivo</th>
            <th>Série</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($rows as $row)
                <tr>
                    <td>{{$row->name}}</td>
                    <td>{{\App\Enum\Shift::options()[$row->shift]}}</td>
                    <td>{{$row->spaces}}</td>
                    <td>{{$row->year}}</td>
                    <td>{{\App\Enum\Grade::options()[$row->grade]}}</td>
                    <td>
                        <a href="{{route('classes.edit', $row->id)}}" class="btn btn-sm btn-secondary">Editar</a>
                        {!! Form::open(['method' => 'delete', 'route' => ['classes.destroy', $row->id], 'class' => 'd-inline-block']) !!}
                        {!! Form::submit('Remover', ['class' => 'btn btn-sm btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $rows->links() }}

@endsection
