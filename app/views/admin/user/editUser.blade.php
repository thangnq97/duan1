@extends('admin.home')
@section('main-content')
    <form action="./save-edit-user?id={{$user->id}}" method="POST" enctype="multipart/form-data" data-toggle="validator" role="form">
        <div class="mb-3 mt-3 form-group">
            <label class="control-label">USERNAME</label>
            <input type="text" name="username" class="form-control" value="{{$user->username}}" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="mb-3 form-group">
            <label class="control-label">PASSWORD</label>
            <input type="password" name="password" class="form-control" value="{{$user->password}}" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="mb-3 mt-3 form-group">
            <label class="control-label">EMAIL</label>
            <input type="text" name="email" class="form-control" value="{{$user->email}}" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="mb-3 mt-3 form-group">
            <label class="control-label">ROLE</label>
            <input type="text" name="role" class="form-control" value="{{$user->role}}" required>
            <div class="help-block with-errors"></div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection