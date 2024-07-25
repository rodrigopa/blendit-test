@extends('layout')

@section('main')

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">BlendIT</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    @if (\Illuminate\Support\Facades\Gate::check('manage-students'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('students.index')}}">Alunos</a>
                        </li>
                    @endif
                    @if (\Illuminate\Support\Facades\Gate::check('manage-classes'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('classes.index')}}">Turmas</a>
                        </li>
                    @endif
                    @if (\Illuminate\Support\Facades\Gate::check('manage-reports'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('report.students.grade')}}">Alunos por Série</a>
                        </li>
                    @endif
                    @if (\Illuminate\Support\Facades\Gate::check('manage-reports'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('report.students.segment')}}">Alunos por Segmento</a>
                        </li>
                    @endif
                    @if (\Illuminate\Support\Facades\Gate::check('manage-reports'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('report.students.classes')}}">Alunos por Turma</a>
                        </li>
                    @endif
                    @if (\Illuminate\Support\Facades\Gate::check('manage-reports'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('report.siblings')}}">Irmãos</a>
                        </li>
                    @endif
                    @if (\Illuminate\Support\Facades\Gate::check('manage-enrolls'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('students.enroll.index')}}">Matrículas</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('auth.logout')}}">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Conteúdo Principal -->
    <div class="container mt-5">
        <h3 class="mb-4">@yield('title')</h3>

        @if ($errors->any())
            <div class="alert alert-danger">
                {!! implode('', $errors->all(':message<br />')) !!}
            </div>
        @endif

        @if (session()->exists('success'))
            <div class="alert alert-success">
                {!! session()->get('success') !!}
            </div>
        @endif

        @yield('content')
    </div>

@endsection
