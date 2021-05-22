@extends('layouts.customer')

@section('content')
<h1>Products</h1>
<table class="table table-hover">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Code</th>
            <th>Description</th>
            <th>Stock</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->code}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->stock}}</td>
                <td>${{$product->price}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
