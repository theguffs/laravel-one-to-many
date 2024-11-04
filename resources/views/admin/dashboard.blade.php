@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-success">
                        Sei loggato!
                    </h1>
                    <br>
                    La dashboard è una pagina privata (protetta dal middleware)
                </div>
                <div>
                    <a href="{{ route('admin.projects.index')}}" class="btn btn-primary">mostra i progetti</a>
                    <a href="{{ route('admin.projects.create')}}" class="btn btn-success">crea un nuovo progetto</a>
                </div>
            </div>
        </div>
    </div>
@endsection
