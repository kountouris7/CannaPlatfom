@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Write new article</h1></div>

                    <div class="panel-body">
                        <form method="POST" action="{{route('publishArticle' ,[auth()->id()])}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="title">Title:</label>
                                <textarea placeholder="Title" class="form-control" id="title" name="title" type="text"
                                          required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea placeholder="Description" class="form-control" id="description"
                                          name="description"
                                          type="text" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="body">Text:</label>
                                <textarea placeholder="Write something great" class="form-control" id="body" name="body"
                                          type="text" required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Publish</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection