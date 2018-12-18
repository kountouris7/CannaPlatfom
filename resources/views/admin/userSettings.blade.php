@extends('layouts.app')
@section('content')
    <div class="container">
        @foreach($users as $user)
            <div class="form-group">
                <div class="card">
                    {{$user->name}} <a href="{{route('assignRoleToUserForm',[$user->id])}}">Edit</a>

                </div>
            </div>
        @endforeach
    </div>

@endsection