@extends('layouts.app')
@section('content')
    @foreach($articles as $article)
        <div class="container">
            Title: <a href="{{route('showCommentArticle', [$article->id])}}"><strong>{{$article->title}}</strong> <br></a>
            Description: <strong>{{$article->description}}</strong> <br>
            Body: <strong>{{$article->body}} </strong>
            <hr>
        </div>
    @endforeach


@endsection