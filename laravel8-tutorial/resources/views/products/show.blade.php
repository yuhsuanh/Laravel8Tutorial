@extends('layouts.customer')

@section('content')
<dl class="row">
    @foreach($product->getAttributes() as $name => $value)
        <dt class="col-sm-3">{{$name}}</dt>
        <dd class="col-sm-9">{{$value}}</dd>
    @endforeach
</dl>

<div class="row">
    <div class="col-sm">
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
    </div>
</div>
@endsection
