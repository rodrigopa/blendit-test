@extends('layout-auth')

@section('title', 'Alunos por Série')

@section('content')

    @if (!is_null($students))
        <div class="alert alert-info">
            {{count($students)}} alunos encontrados na série: {{\App\Enum\Grade::options()[request()->input('grade')]}}
        </div>
    @endif

    {!! Form::open(['method' => 'get', 'route' => 'report.students.grade']) !!}

    <div class="mb-2">
        <label for="grade" class="form-label">Selecione a série</label>
        {!! Form::select('grade', $options, null, ['class' => 'form-control', 'id' => 'grade']) !!}
    </div>

    {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection
