@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('shop.product.show_title') }}</div>

                <div class="card-body">

                    @if(!is_null($product->image_path))
                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                                <img src="{{asset('storage/'.$product->image_path)}}" class="img-fluid mx-auto d-block" alt="Card image cap">
                            </div>
                        </div>
                    @endif
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('shop.product.fields.name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" max-length="500" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $product->name }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('shop.product.fields.description') }}</label>

                            <div class="col-md-6">
                            <textarea id="description" maxlength="1500" class="form-control @error('description') is-invalid @enderror" name="description" disabled>{{ $product->description }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="amount" class="col-md-4 col-form-label text-md-right">{{ __('shop.product.fields.amount') }}</label>

                            <div class="col-md-6">
                                <input id="amount" type="number" min="0" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{ $product->amount }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('shop.product.fields.price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="number" step="0.01" min="0" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ $product->price }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('shop.product.fields.category') }}</label>

                            <div class="col-md-6">
                                @if($product->hasCategory())
                                <input id="category" type="text" class="form-control @error('category') is-invalid @enderror" name="category" value="{{ $product->category->name }}" disabled>
                                @else
                                <input id="category" type="text" class="form-control @error('category') is-invalid @enderror" name="category" value="Brak" disabled>
                                @endif
                            </div>
                        </div>

                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
