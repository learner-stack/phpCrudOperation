@extends('products.layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
    <div class="page-header clearfix">
        <div class="pull-left">
        <h2>Display Product Detail {{$product->name}}</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{route('products.create')}}">Add New Product</a>
        </div>
    
    </div>
</div>

<form action="{{route('products.store')}}" method="POST">
@csrf
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            <strong>{{$product->name}}</strong>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <strong>Detail:</strong>
            <strong>{{$product->detail}}</strong>
        </div>
    </div>

  
</form>

@endsection