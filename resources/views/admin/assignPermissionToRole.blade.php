@extends('layouts.app')
@section('content')
    <div class="container">
        {{--<h3>Permissions</h3>--}}
        {{--@foreach($permissions as $permission)--}}
        {{--<li>{{$permission->name}}</li>--}}
        {{--@endforeach--}}
        {{--<hr>--}}
        {{--<h3>Roles</h3>--}}
        {{--@foreach($roles as $role)--}}
        {{--<li>{{$role->name}}</li>--}}
        {{--@endforeach--}}
        {!! Form::open(['route' => 'savePermissionsToRole']) !!}

        <div class="form-group">
            <label for="permission">Choose Permission:</label>
            <select name="permission_id" id="permission_id" class="form-group" required>
                <option value=""></option>
                @foreach ($permissions as $permission)
                    <option value="{{$permission->id}}" {{old('permission_id') == $permission->id ? 'selected' : '' }}>
                        {{$permission->name}}
                    </option>
                @endforeach
            </select>

            <div class="form-group">
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
                    <input type="hidden" name="permission" value="{{$permission->id}}">
                    <button type="submit" class="btn btn-primary">Publish Group</button>
                </div>
            </div>
            {{--{{ Form::submit('Save Permission') }}--}}
            {!! Form::close() !!}
        </div>

    </div>



@endsection