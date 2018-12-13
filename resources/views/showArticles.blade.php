@extends('layouts.app')
@section('content')
    @foreach($articles as $article)

            <div class="container">
                Title: <a href="{{route('showFullArticle', [$article->id])}}"><strong>{{$article->title}}</strong> <br></a>
                Description: <strong>{{$article->description}}</strong> <br>
                <hr>
            </div>

    @endforeach


@endsection