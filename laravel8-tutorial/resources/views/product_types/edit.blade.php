@extends('layouts.customer')

@section('content')
    <div class="col">
        <form action="{{ route('product_types.update', ['product_type' => $productType]) }}" method="POST" enctype="multipart/form-data">
            {{-- You need to write addition line to refer PUT method, because form only GET and POST option --}}
            {{-- should add enctype if you want to pass the file path --}}
            @method('PUT')

            <div class="form-group row">
                <label class="col-sm-2 col-form-label" for="notes">Name</label>
                <div class="col-sm-10">
                    <input name="name" type="text" class="form-control" required placeholder="Name" maxlength="255" value="{{$productType->name ?? ''}}"/>
                    <small class="form-text text-muted">Product Type Name.</small>
                </div>
            </div>

            <div class="form-group row">
                <div class="custom-file">
                    <label class="custom-file-label" for="picture">Picture</label>
                    <input name="picture" type="file" class="custom-file-input" placeholder="Picture">
                </div>
            </div>

            @csrf

            <div class="form-group row">
                <div class="col-sm-3">
                    <button type="submit" class="btn btn-primary">Update Type</button>
                </div>
                <div class="col-sm-9">
                    <a href="{{ route('product_types.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </form>
    </div>
@endsection
