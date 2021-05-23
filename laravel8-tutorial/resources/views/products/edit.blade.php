@extends('layouts.customer')

@section('content')
    <div class="col">
        <form action="{{ route('products.update', ['product' => $product]) }}" method="POST">
{{--            You need to write addition line to refer PUT method, because form only GET and POST option--}}
            @method('PUT')

            @include('products.fields')

            <div class="form-group row">
                <div class="col-sm-3">
                    <button type="submit" class="btn btn-primary">Update Product</button>
                </div>
                <div class="col-sm-9">
                    <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </form>
    </div>
@endsection
