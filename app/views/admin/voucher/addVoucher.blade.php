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
        <div class="form-group">
            <label class="control-label">Min Price</label>
            <input type="text" name="min_price" class="form-control" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label class="control-label">Quanity</label>
            <input type="number" name="quanity" class="form-control" required>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label class="control-label">Expired</label>
            <input type="date" name="expired" class="form-control" required>
            <div class="help-block with-errors"></div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection