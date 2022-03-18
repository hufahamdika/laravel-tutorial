@extends('layouts.template')

@section('container')
    <h1>Halaman {{ $title }}</h1>
    <h5>Editor: {{ $name }} | {{ $email }}</h5>
    <hr/>
    @foreach($categories as $category)
    <ul>
        <li>
            <a href="/categories/{{ $category->slug }}" > {{ $category->name }}</a>
        </li>
    </ul>
    @endforeach
@endsection
 

