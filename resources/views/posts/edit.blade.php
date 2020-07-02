@extends('layouts.app')

@section('title',  'Edit product')

@section('content')
    <form action="/posts/{{$post->id}}" method="post">
        @method('PUT')

        Name: <input type="text" name="name" value="{{$post->name}}"><br />
        @error('name')
            <p>{{$message}}</p>
        @enderror
        Text: <input type="text" name="text" value="{{$post->text}}"><br />
        @error('text')
            <p>{{$message}}</p>
        @enderror
        <input type="hidden" name="post_id" value="1">
        <button>Bewerk bericht</button>

        @csrf
    </form>
@endsection