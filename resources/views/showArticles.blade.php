@extends('layouts.app')
@section('content')
    @foreach($articles as $article)
        <div class="container">
            Title: <strong>{{$article->title}}</strong> <br>
            Description: <strong>{{$article->description}}</strong> <br>
            Body: <strong>{{$article->body}} </strong><hr>
        </div>
    @endforeach
@endsection