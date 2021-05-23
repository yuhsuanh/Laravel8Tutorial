@extends('layouts.customer')

@section('content')
    <div class="col">
        <form action="{{ route('products.store') }}" method="POST">

            @include('products.fields')

            <div class="form-group row">
                <div class="col-sm-3">
                    <button type="submit" class="btn btn-primary">Add Reservation</button>
                </div>
                <div class="col-sm-9">
                    <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </form>
    </div>
@endsection
