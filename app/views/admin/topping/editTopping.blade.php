@extends('admin.home')
@section('main-content')
    <form action="./save-edit-topping?id={{$topping->id}}" method="POST" data-toggle="validator" role="form">
        <div class="mb-3 mt-3 form-group">
            <label class="control-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{$topping->name}}" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="mb-3 mt-3 form-group">
            <label class="control-label">Price</label>
            <input type="text" name="price" class="form-control" value="{{$topping->price}}" required>
            <div class="help-block with-errors"></div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection