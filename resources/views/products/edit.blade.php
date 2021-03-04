@extends('products.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
    <div class="page-header clearfix">
        <div class="pull-left">
            <h2>Edit Details</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('products.index')}}">Add New Product</a>
        </div>
    </div>
</div>

<form action="{{route('products.update',$product->id)}}" method="POST">
@csrf
@method('PUT')
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <input type="text" name="name" value="{{$product->name}}"class="form-control" placeholder="Name">
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <strong>Detail:</strong>
            <input type="text" name="detail" value="{{$product->detail}}" style="height:150px;" class="form-control" placeholder="Detail">
        </div>
    </div>

    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </div>

</form>

@endsection