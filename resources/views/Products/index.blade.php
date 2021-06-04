@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Price</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$product->name}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->amount}}</td>
                            <td>{{$product->price}}</td>
                            <td>
                            <button class="btn btn-danger btn-sm delete" data-id="{{$user->id}}">X</button>
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $products->links() }}
        </div>
    </div>
</div>
@endsection
@push('javascript')
<script>
const deleteurl = "{{ url('products') }}/";
</script>
@endpush
@push('js-files')
<script src="{{ asset('js/delete.js') }}"></script>
@endpush