@extends("layouts.app")

@section('main-content')
    <h1>{{$project->name}}</h1>
    <p>{{$project->description}}</p>
    <a href="{{ route("admin.projects.edit", $project)}}">
        modifica
    </a>
    <form action="{{ route("admin.projects.destroy", $project)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">elimina</button>
    </form>
    <a href="{{route('admin.projects.index')}}">indietro</a>
@endsection