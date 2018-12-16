<div class="row">
    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="level">

                    {{--add comments--}}
                    @if (auth()->check())
                        {!! Form::open(['route' => ['saveCommentArticle' , $article->id]]) !!}
                        <div class="form-group">
            <textarea name="body" id="body" class="form-control"
                      placeholder="Have something to say?"
                      rows="2"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Post</button>
                        {!! Form::close() !!}
                    @else
                        <p class="text-center">Please <a href="{{ route('login') }}">sign in</a> to leave a comment.</p>
                    @endif

                    {{--<div>--}}
                    {{--<form method="POST" action="/replies/{{ $reply->id }}/favorites">--}}
                    {{--{{ csrf_field() }}--}}

                    {{--<button type="submit" class="btn btn-default" {{ $reply->isFavorited() ? 'disabled' : '' }}>--}}
                    {{--{{ $reply->favorites_count }} {{ str_plural('Favorite', $reply->favorites_count) }}--}}
                    {{--</button>--}}
                    {{--</form>--}}
                    {{--</div>--}}

                </div>
            </div>
        </div>
    </div>

</div>

