@extends('layouts.app')
@section('content')
    @foreach($articles as $article)
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Title: {{$article->title}}
                        </div>

                        <div class="panel-body">
                            {{$article->body}}
                        </div>

                    </div>
                </div>
            </div>
            @foreach($article->comments as $comment)
                <div class="panel-body">

                    {{ $comment->body }}

                </div>
            @endforeach
        </div>

    @endforeach


@endsection