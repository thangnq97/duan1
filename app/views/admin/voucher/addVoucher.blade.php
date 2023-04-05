@extends('admin.home')
@section('main-content')
    <form action="./save-add-voucher" method="POST" data-toggle="validator" role="form">
        <div class="form-group">
            <label class="control-label">Name</label>
            <input type="text" name="name" class="form-control" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label class="control-label">Discount</label>
            <input type="text" name="discount" class="form-control" required>
            <div class="help-block with-errors"></div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection