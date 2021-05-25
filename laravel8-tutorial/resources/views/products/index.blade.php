@extends('layouts.customer')

@section('buttons')
    <a class="btn btn-primary" href="{{ route('products.create') }}" role="button">Add New Product</a>
@endsection

@section('content')
    <table class="table table-hover">
        <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Code</th>
            <th>Description</th>
            <th>Stock</th>
            <th>Price</th>
            <th>Actions</th>
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
                <td class="actions">
                    <a href="{{route('products.show', ['product' => $product->id])}}" alt="View" title="View">View</a>
                    <a href="{{route('products.edit', ['product' => $product->id])}}" alt="Edit" title="Edit">Edit</a>
                    <form action="{{route('products.destroy', ['product' => $product->id])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-link" title="Delete" value="DELETE">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
