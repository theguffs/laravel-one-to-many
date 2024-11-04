@extends("layouts.app")

@section('main-content')
    <h1>nuovo progetto</h1>
    <form action="{{route('admin.projects.store')}}" method="post">
        @csrf
        <label for="name">nome:</label>
        <input type="text" name="name" id="name" required>

        <label for="description">descrizione:</label>
        <textarea name="desription" id="desription" required></textarea>
        <button type="submit"> + NUOVO PROGETTO </button>
    </form>
    <a href="{{route('admin.projects.index')}}">indietro</a>
@endsection