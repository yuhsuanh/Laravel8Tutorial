@extends('layouts.customer')

@section('content')
<h1>Products</h1>
<table class="table table-hover">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Create</th>
            <th>Update</th>
        </tr>
    </thead>
    <tbody>
        @foreach($product_types as $type)
            <tr>
                <td>{{$type->id}}</td>
                <td>{{$type->name}}</td>
                <td>{{$type->created_at}}</td>
                <td>{{$type->updated_at}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
