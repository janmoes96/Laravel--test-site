@extends('layouts.app')

@section('title',  'Create product')

@section('content')
    <form action="/posts" method="post">
        {{method_field('POST')}}
        {{csrf_field()}}
        Name: <input type="text" name="name" value="{{old('name')}}"><br />
        @error('name')
            <p>{{$message}}</p>
        @enderror
        Text: <input type="text" name="text" value="{{old('text')}}"><br />
        @error('text')
            <p>{{$message}}</p>
        @enderror
        <input type="submit" name="submit" value="submit">
    </form>
@endsection