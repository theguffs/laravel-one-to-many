@extends("layouts.app")

@section('main-content')
    <h1>modifica il progetto</h1>
    <form action="{{route('admin.projects.update', $project)}}" method="post">
    @csrf
    @method('put')
    <label for="name">nome:</label>
    <input type="text" name="name" id="name" value="{{$project->name}}" required>
    <label for="description">descrizione:</label>
    <textarea name="desription" id="desription" required>{{ $project->description }}</textarea>
    <button type="submit">aggiorna</button>
    </form>
    <a href="{{route('admin.projects.index')}}">indietro</a>
@endsection