@extends('layout')

@section('main')

    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="row w-100">
            <div class="col-md-6 col-lg-4 mx-auto">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        {!! implode('', $errors->all(':message<br />')) !!}
                    </div>
                @endif
                <div class="card p-4 shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Entrar</h3>

                        {!! Form::open(['route' => 'auth.login']) !!}

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                {!! Form::text('email', null, ['class' => 'form-control', 'id' => 'email']) !!}
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Senha</label>
                                {!! Form::password('password', ['class' => 'form-control', 'id' => 'password']) !!}
                            </div>

                            {!! Form::submit('Entrar', ['class' => 'btn btn-primary w-100']) !!}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
