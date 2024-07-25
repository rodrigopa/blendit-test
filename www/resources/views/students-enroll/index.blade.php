@extends('layout-auth')

@section('title', 'Matrículas')

@section('content')

    {!! Form::open(['method' => 'get', 'route' => 'students.enroll.index']) !!}

    <div class="mb-2">
        <label for="grade" class="form-label">Selecione a série</label>
        {!! Form::select('grade', $options, request()->input('grade'), ['class' => 'form-control', 'id' => 'grade']) !!}
    </div>

    {!! Form::submit('Buscar', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

    @if (!is_null($students))

        <table class="table mt-2">
            <thead>
            <tr>
                <th>Matrícula</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->name}}</td>
                    <td>
                        {!! Form::open(['method' => 'post', 'route' => 'students.enroll', 'class' => 'd-inline-block']) !!}
                        {!! Form::hidden('student_id', $student->id) !!}
                        {!! Form::select('class_id', $classes, null, ['class' => 'form-control d-inline-block', 'style' => 'width: 70px']) !!}
                        {!! Form::submit('Matricular', ['class' => 'btn btn-sm btn-info']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    @endif

@endsection
