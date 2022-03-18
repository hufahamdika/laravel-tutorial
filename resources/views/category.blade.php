@extends('layouts.template')

@section('container')
    <h1>Halaman {{ $title }} : {{ $category }}</h1>
    <h5>Editor: {{ $name }} | {{ $email }}</h5>
    <hr/>
    @foreach($articles as $article)
    <article class="mb-5">
        <h3> 
            <a href="/articles/{{ $article->slug }}" > {{ $article->title }}
            </a>                    
        </h3>
        <h6>By: <a href="/authors/{{ $article->author->username }}" class="text-decoration-none">{{ $article->author->name }}</a> in <a href="/categories/{{ $article->category->slug }}" 
            class="text-decoration-none">{{ $article->category->name }}</a></h6>
        <p>{{ $article->excerpt }}</p>
    </article>
    @endforeach
@endsection