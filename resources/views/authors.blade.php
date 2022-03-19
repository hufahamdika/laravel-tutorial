@extends('layouts.template')

@section('container')
    <h1>Halaman {{ $title }}</h1>
    <h5>Editor: {{ $name }} | {{ $email }}</h5>
    <hr/>
    @foreach($authors as $author)
    <ul>
        <li>
            <a href="/authors/{{ $author->username }}" > {{ $author->name }}</a>
        </li>
    </ul>
    @endforeach
@endsection
 

