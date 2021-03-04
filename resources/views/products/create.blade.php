@extends('products.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            <h2>Add New Product</h2>
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('products.index')}}">Add New Product</a>
        </div>
    </div>
</div>

<form action="{{route('products.store')}}" method="POST">
@csrf
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" class="form-control" placeholder="Name">
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <strong>Detail:</strong>
            <input type="text" name="detail" style="height:150px;" class="form-control" placeholder="Detail">
        </div>
    </div>

    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </div>

</form>

@endsection