@extends('layouts.app')

@section('title',  'product show')

@section('content')
<h1>Volledige bericht</h1>
<p>{{$post->name}}</p>
<p>{{$post->text}}</p>
<a href="/posts/{{$post->id}}/edit">Bewerk</a>
<form action="/posts/{{$post->id}}" method="post">
    @method('DELETE')
    @csrf
    <button>DELETE</button>
</form>
@endsection