@extends('layout-auth')

@section('title', 'Relatório de irmãos')

@section('content')

    @if ($found === false)
        <div class="alert alert-danger">
            Nenhum irmão encontrado
        </div>
    @elseif ($found === true)
        <table class="table">
            <thead>
                <tr>
                    <th>Matrícula</th>
                    <th>Nome</th>
                    <th>Série</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siblings as $sibling)
                    <tr>
                        <td>{{$sibling->id}}</td>
                        <td>{{$sibling->name}}</td>
                        <td>{{\App\Enum\Grade::options()[$sibling->grade]}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    {!! Form::open(['method' => 'get', 'route' => 'report.siblings']) !!}

    <div class="mb-2">
        <label for="name" class="form-label">Nome completo</label>
        {!! Form::text('name', request()->input('name'), ['class' => 'form-control', 'id' => 'name']) !!}
    </div>

    <div class="mb-2">
        <label for="grade" class="form-label">Selecione a série</label>
        {!! Form::select('grade', $options, request()->input('grade'), ['class' => 'form-control', 'id' => 'grade']) !!}
    </div>

    {!! Form::submit('Buscar', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection
