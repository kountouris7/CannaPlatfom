@extends('layouts.app')
@section('content')
    <div class="container">
        @foreach($permissions as $permission)
            <li>{{$permission->name}}</li>
        @endforeach
    </div>
@endsection