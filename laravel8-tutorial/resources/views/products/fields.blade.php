{{--            <div class="form-group row">--}}
{{--                <label class="col-sm-2 col-form-label" for="productType_id">Product Type</label>--}}
{{--                <div class="col-sm-10">--}}
{{--                    <select name="room_id" class="form-control" id="productType_id" required>--}}
{{--                        @foreach($productTypes as $id => $display)--}}
{{--                            <option value="{{ $id }}">{{ $display }}</option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
{{--                    <small class="form-text text-muted">The room number being booked.</small>--}}
{{--                </div>--}}
{{--            </div>--}}

<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="notes">Name</label>
    <div class="col-sm-10">
        <input name="name" type="text" class="form-control" placeholder="Name" value="{{$product->name ?? ''}}"/>
        <small class="form-text text-muted">Product Name.</small>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="notes">Code</label>
    <div class="col-sm-10">
        <input name="code" type="text" class="form-control" placeholder="Code" maxlength="10" value="{{isset($product->code) ? $product->code: ''}}"/>
        <small class="form-text text-muted">Product Code.</small>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="notes">Description</label>
    <div class="col-sm-10">
        <input name="description" type="text" class="form-control" placeholder="Description" value="{{$product->description ?? ''}}"/>
        <small class="form-text text-muted">Product Description.</small>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="notes">Stock</label>
    <div class="col-sm-10">
        <input name="stock" type="number" class="form-control" placeholder="Stock" value="{{$product->stock ?? ''}}"/>
        <small class="form-text text-muted">Product Stock.</small>
    </div>
</div>

<div class="form-group row">
    <label class="col-sm-2 col-form-label" for="notes">Price</label>
    <div class="col-sm-10">
        <input name="price" type="number" class="form-control" placeholder="Price" step="0.01" value="{{$product->price ?? ''}}"/>
        <small class="form-text text-muted">Product Price.</small>
    </div>
</div>

{{--            If you want to add some hidden default value--}}
{{--            <input type="hidden" name="is_reservation" value="1"/>--}}

@csrf
