@extends('layout-auth')

@section('title', $operation === 'create' ? 'Novo Aluno' : 'Editar Aluno')

@section('content')

    {!! Form::model($model, ['method' => $method, 'route' => $action]) !!}

    @if ($operation === 'edit')
        <div>
            <label for="id" class="form-label">Matrícula</label>
            {!! Form::text('id', null, ['class' => 'form-control', 'id' => 'id', 'readonly' => true]) !!}
        </div>
    @endif

    <div class="row">
        <div class="col-md-8 mb-2">
            <label for="name" class="form-label">Nome completo</label>
            {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) !!}
        </div>
        <div class="col-md-4 mb-2">
            <label for="birth_date" class="form-label">Data de nascimento</label>
            {!! Form::date('birth_date', null, ['class' => 'form-control', 'id' => 'birth_date']) !!}
        </div>
        <div class="col-md-4 mb-2">
            <label for="address_type" class="form-label">Tipo Endereço</label>
            {!! Form::select('address_type', \App\Enum\AddressType::options(), null, ['class' => 'form-control', 'id' => 'address_type']) !!}
        </div>
        <div class="col-md-8 mb-2">
            <label for="address_street" class="form-label">Endereço</label>
            {!! Form::text('address_street', null, ['class' => 'form-control', 'id' => 'address_street']) !!}
        </div>
        <div class="col-md-4 mb-2">
            <label for="address_cep" class="form-label">CEP</label>
            {!! Form::tel('address_cep', null, ['class' => 'form-control', 'id' => 'address_cep']) !!}
        </div>
        <div class="col-md-4 mb-2">
            <label for="address_number" class="form-label">Número</label>
            {!! Form::text('address_number', null, ['class' => 'form-control', 'id' => 'address_number']) !!}
        </div>
        <div class="col-md-4 mb-2">
            <label for="address_complement" class="form-label">Complemento</label>
            {!! Form::text('address_complement', null, ['class' => 'form-control', 'id' => 'address_complement']) !!}
        </div>
        <div class="col-md-4 mb-2">
            <label for="grade" class="form-label">Série</label>
            {!! Form::select('grade', \App\Enum\Grade::options(), null, ['class' => 'form-control', 'id' => 'grade']) !!}
        </div>
        <div class="col-md-4 mb-2">
            <label for="segment" class="form-label">Segmento</label>
            {!! Form::select('segment', \App\Enum\Segment::options(), null, ['class' => 'form-control', 'id' => 'segment']) !!}
        </div>
        <div class="col-md-6 mb-2">
            <label for="mother_name" class="form-label">Nome da mãe</label>
            {!! Form::text('mother_name', null, ['class' => 'form-control', 'id' => 'mother_name']) !!}
        </div>
        <div class="col-md-6 mb-2">
            <label for="father_name" class="form-label">Nome do pai</label>
            {!! Form::text('father_name', null, ['class' => 'form-control', 'id' => 'father_name']) !!}
        </div>
    </div>

    {!! Form::submit('Salvar', ['class' => 'btn btn-primary']) !!}

@endsection
