@extends('layout-auth')

@section('title', $operation === 'create' ? 'Nova Turma' : 'Editar Turma')

@section('content')

    {!! Form::model($model, ['method' => $method, 'route' => $action]) !!}

    <div class="row">
        <div class="col-md-8 mb-2">
            <label for="name" class="form-label">Nome da turma</label>
            {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) !!}
        </div>
        <div class="col-md-4 mb-2">
            <label for="shift" class="form-label">Turno</label>
            {!! Form::select('shift', \App\Enum\Shift::options(), null, ['class' => 'form-control', 'id' => 'shift']) !!}
        </div>
        <div class="col-md-4 mb-2">
            <label for="spaces" class="form-label">Quantidade de vagas</label>
            {!! Form::tel('spaces', null, ['class' => 'form-control', 'id' => 'spaces']) !!}
        </div>
        <div class="col-md-4 mb-2">
            <label for="year" class="form-label">Ano letivo</label>
            {!! Form::tel('year', null, ['class' => 'form-control', 'id' => 'year']) !!}
        </div>
        <div class="col-md-4 mb-2">
            <label for="grade" class="form-label">Série</label>
            {!! Form::select('grade', \App\Enum\Grade::options(), null, ['class' => 'form-control', 'id' => 'grade']) !!}
        </div>
    </div>

    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}

@endsection
