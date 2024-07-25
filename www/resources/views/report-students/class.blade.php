@extends('layout-auth')

@section('title', 'Alunos por Turma')

@section('content')

    @if (!is_null($students))
        <div class="alert alert-info">
            {{count($students)}} alunos encontrados na turma: {{$options[request()->input('class')]}}
        </div>
    @endif

    {!! Form::open(['method' => 'get', 'route' => 'report.students.classes']) !!}

    <div class="mb-2">
        <label for="class" class="form-label">Selecione a turma</label>
        {!! Form::select('class', $options, null, ['class' => 'form-control', 'id' => 'class']) !!}
    </div>

    {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection
