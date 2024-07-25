@extends('layout-auth')

@section('title', 'Alunos por Segmento')

@section('content')

    @if (!is_null($students))
        <div class="alert alert-info">
            {{count($students)}} alunos encontrados no segmento: {{\App\Enum\Segment::options()[request()->input('segment')]}}
        </div>
    @endif

    {!! Form::open(['method' => 'get', 'route' => 'report.students.segment']) !!}

    <div class="mb-2">
        <label for="segment" class="form-label">Selecione o segmento</label>
        {!! Form::select('segment', $options, null, ['class' => 'form-control', 'id' => 'segment']) !!}
    </div>

    {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection
