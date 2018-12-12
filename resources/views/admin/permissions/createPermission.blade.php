@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Create New Permission</h1>
                        <div class="panel-body">
                            {!! Form::open(['route' => 'savePermission']) !!}
                            <div class="form-group">
                                <label for="permission">Permission Name:</label>
                                <textarea
                                        placeholder="eg. write,edit,delete"
                                        class="form-control" id="permission" name="permission" type="text"
                                        required>
                                </textarea>
                            </div>
                            {{ Form::submit('Save Permission') }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection