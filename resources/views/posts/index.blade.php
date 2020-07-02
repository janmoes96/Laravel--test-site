@extends('layouts.app')

@section('title',  'product index')

@section('content')
    <h1>Posts</h1>
    @forelse($posts as $post)
        <a href="/posts/{{$post->id}}">{{$post->name}}</a>
    @empty
        <p>Geen berichten om weer te geven</p>
    @endforelse
    <a href="/posts/create">Voeg een nieuw bericht toe</a>
@endsection