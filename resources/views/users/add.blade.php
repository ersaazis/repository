@extends('crudbooster::themes.adminlte.layout.layout')
@section("content")


    <p>
        <a href="{{ route('AdminUsersControllerGetIndex') }}"><i class="fa fa-arrow-left"></i> Back To List</a>
    </p>

    <div class="box box-default">
        <div class="box-header">
            <h1 class="box-title">Add User</h1>
        </div>
        <form method="post" action="{{ cb()->getAdminUrl("users/add-save") }}">
            {!! csrf_field() !!}
        <div class="box-body">
            <div class="form-group">
                <label for="">Name</label>
                <input required type="text" placeholder="E.g : John Doe" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Role</label>
                <select name="cb_roles_id" required class="form-control">
                    <option value="">** Select a Role</option>
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">E-mail</label>
                <input required type="email" placeholder="E.g : john@email.com" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input required type="password" placeholder="Enter a new password" name="password" class="form-control">
            </div>
        </div>
        <div class="box-footer">
            <input type="submit" class="btn btn-success" value="Add User">
        </div>
        </form>
    </div>


@endsection