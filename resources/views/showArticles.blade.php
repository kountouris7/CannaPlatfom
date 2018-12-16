@extends('layouts.app')
@section('content')
    {{--@foreach($articles as $article)--}}
    <div class="container">
        @foreach($articles as $article)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top"
                     src="https://cdn.shopify.com/s/files/1/0664/8611/products/Zoom-THC-Black_8f59c64d-6915-438f-bfd4-04b5d5955be7.jpg?v=1521213890"
                     alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><a
                                href="{{route('showFullArticle', [$article->id])}}"><strong>{{$article->title}}</strong>
                            <br></a></h5>
                    <p class="card-text">{{$article->description}}</p>

                </div>

            </div>
            <br>
        @endforeach
    </div>

@endsection




