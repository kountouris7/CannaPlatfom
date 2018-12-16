@extends('layouts.app')
@section('content')
    @foreach($articles as $article)
        <div class="container">
            {{--article text--}}
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">{{$article->title}}</h1>
                    <span class="flex">
                               by {{$article->writer->name}}
                            </span>
                    <p class="lead">  {!!$article->body!!}</p>
                </div>
            </div>

            {{--Comments section--}}
            @foreach($article->comments as $comment)
                <div class="card-body">
                    <strong class="flex">
                        {{$comment->commenter->name}}
                    </strong> said:
                    <div class="panel-body">
                        {{ $comment->body}}
                    </div>
                    {{$comment->created_at->diffForHumans()}}
                </div>

            @endforeach
            @include('commentArticles')
        </div>
    @endforeach
@endsection