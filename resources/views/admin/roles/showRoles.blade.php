@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($roles as $role)
    <li>{{$role->name}}</li>
    @endforeach
    {{--@include('admin.roles.createRole')--}}
</div>


@endsection

