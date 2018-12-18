@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Assign Role To User</h3>

        <div class="form-group">
            <div class="card">
                {{$user->name}}

                {!! Form::open(['route' => ['saveRoleToUser', $user->id ]]) !!}
                <label for="role">Choose Role:</label>
                <select name="role_id" id="role_id" class="form-group" required>
                    <option value=""></option>
                    @foreach ($roles as $role)
                        <option value="{{$role->id}}" {{old('role_id') == $role->id ? 'selected' : '' }}>
                            {{$role->name}}
                        </option>
                    @endforeach
                </select>

                <div class="form-group">
                    <input type="hidden" name="role" value="{{$role->id}}">
                    <input type="hidden" name="user" value="{{$user->id}}">
                    <button type="submit" class="btn btn-primary">Assign Role To User</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection
