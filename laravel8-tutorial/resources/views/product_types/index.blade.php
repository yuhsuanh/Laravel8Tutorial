@extends('layouts.customer')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Picture</th>
            <th>Created</th>
            <th class="Actions">Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse ($productTypes as $productType)
            <tr>
                <td>{{ $productType->id }}</td>
                <td>{{ $productType->name }}</td>
                <td>
                    <img width="50px"
                         src="@php echo \Illuminate\Support\Facades\Storage::url($productType->picture) @endphp" >
                </td>
                <td>{{ date('F d, Y', strtotime($productType->created_at)) }}</td>
                <td class="actions">
                    <a
                        href="{{ route('product_types.edit', ['product_type' => $productType->id]) }}"
                        alt="Edit"
                        title="Edit">
                        Edit
                    </a>
                </td>
            </tr>
        @empty
        @endforelse
        </tbody>
    </table>
    {{ $productTypes->links() }}
@endsection
