@extends('layout-auth')

@section('title', 'Alunos')

@section('content')

    <a href="{{route('students.create')}}" class="btn btn-primary mb-4">Novo aluno</a>

    <table class="table">
        <thead>
        <tr>
            <th>Matrícula</th>
            <th>Nome</th>
            <th>Série</th>
            <th>Segmento</th>
            <th>Ações</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($rows as $row)
                <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{\App\Enum\Grade::options()[$row->grade]}}</td>
                    <td>{{\App\Enum\Segment::options()[$row->segment]}}</td>
                    <td>
                        <a href="{{route('students.edit', $row->id)}}" class="btn btn-sm btn-secondary">Editar</a>
                        {!! Form::open(['method' => 'delete', 'route' => ['students.destroy', $row->id], 'class' => 'd-inline-block']) !!}
                        {!! Form::submit('Remover', ['class' => 'btn btn-sm btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $rows->links() }}

@endsection
