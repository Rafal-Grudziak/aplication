@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('shop.product.show_title') }}</div>
                <div class="card-body">

                    
                <div class="container bootstrap snippets bootdey">
    <div class="row">
        <div class="col-sm-6 push-bit">
            <div class="row push-bit">
                <div class="col-xs-4">
                        <div class="form-group row justify-content-center">
                            <div class="col-md-6">
                            @if(!is_null($product->image_path))
                                <img src="{{asset('storage/'.$product->image_path)}}" class="img-fluid mx-auto d-block" alt="Card image cap">
                            @else
                                <img src="https://d18lp25pnz8h36.cloudfront.net/installations/common/img/image-not-found.png" class="img-fluid mx-auto d-block" alt="Card image cap">
                            @endif
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 push-bit">
            <div class="clearfix">
                <div class="pull-right">
                    <span class="h2"><strong>{{ $product->name }}</strong></span>
                </div>
                <span class="h4">
                    <strong class="text-success">{{ $product->price }}zł</strong><br />
                    <small>{{__('shop.item.available_pieces')}}: {{$product->amount}}</small>
                </span>
            </div>
            <hr />
            @if(!is_null($product->description))
                <p>{{$product->description}}</p>
                <hr />
            @endif
            <form method="POST" action="{{ route('item.add_to_basket') }}" class="form-inline push-bit text-right">
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                @if($product->amount>0)
                <input type="number" name="amount" min="1" value="1" max="{{$product->amount}}" class="form-control @error('amount') is-invalid @enderror">&nbsp; 
                <button type="submit" class="btn btn-info">{{__('shop.item.add_to_cart')}}</button>
                @else
                <h5 class="text-danger">Produkt chwilowo niedostępny</h5>
                @endif
            </form>

        </div>
    </div>
</div>

                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
