@extends("layouts.app")
@section('main-content')
<h1>elenco progetti</h1>
<a href="{{ route("admin.projects.create")}}">+ nuovo progetto</a>
<ul>
    @foreach ($projects as $project)
    <li>
        <a href="{{ route("admin.projects.show", $project)}}">
            {{ $project->name}}
        </a>
        <a href="{{ route("admin.projects.edit", $project)}}">
             modifica
        </a>
        <form action="{{ route("admin.projects.destroy", $project)}}" method="POST">
           @csrf
           @method('DELETE')
           <button type="submit">
            elimina
           </button>
        </form>
    </li>
    @endforeach
</ul>
@endsection