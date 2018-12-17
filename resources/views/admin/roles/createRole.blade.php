{{--@extends('layouts.app')--}}
{{--@section('content')--}}
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Create New Role</h1>
                        <div class="panel-body">
                            {!! Form::open(['route' => 'saveRole']) !!}
                            <div class="form-group">
                                <label for="role">Role Name:</label>
                                <textarea
                                        placeholder="eg. Admin, Writer, CareProvider...anything"
                                        class="form-control" id="role" name="role" type="text"
                                        required>
                                </textarea>
                            </div>
                            {{ Form::submit('Save Role') }}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--@endsection--}}