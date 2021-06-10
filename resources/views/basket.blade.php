@extends('layouts.app')

@section('content')
<div class="container main-section">
		<div class="row">
			<div class="col-lg-12 pb-2">
				<h4>{{__('shop.basket.basket')}}</h4>
			</div>
			<div class="col-lg-12 pl-3 pt-3">
				<table class="table border bg-white">
				    <thead>
				      	<tr>
					        <th>{{__('shop.basket.product')}}</th>
					        <th>{{__('shop.basket.price')}}</th>
					        <th style="width:10%;">{{__('shop.basket.amount')}}</th>
					        <th>{{__('shop.basket.subtotal')}}</th>
					        <th>{{__('shop.basket.delete')}}</th>
				      	</tr>
				    </thead>
				    <tbody>   
                    @php
                    $sum = 0;
                    @endphp
                    @foreach($baskets as $basket)
                    @php
                        $sum += ($basket->amount * $basket->product->price)
                    @endphp
				      	<tr>
					        <td>
					        	<div class="row">
									<div class="col-lg-2 Product-img">
                                    @if(!is_null($basket->product->image_path))
                                        <img src="{{asset('storage/'.$basket->product->image_path)}}" class="img-fluid mx-auto d-block" alt="Card image cap" style="width: 100px;">
                                    @else
                                        <img src="https://d18lp25pnz8h36.cloudfront.net/installations/common/img/image-not-found.png" class="img-fluid mx-auto d-block" alt="Card image cap">
                                    @endif
									</div>
									<div class="col-lg-10">
										<h4 class="nomargin">{{ $basket->product->name }}</h4>

									</div>
								</div>
					        </td>
					        <td> {{ $basket->product->price }} </td>
					        <td>{{ $basket->amount }}</td>
							<td>{{ number_format($basket->product->price * $basket->amount, 2) }}</td>
					        <td class="actions" data-th="" style="width:10%;">
                            <button type="button" class="btn btn-danger btn-sm delete" data-id="{{$basket->id}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                            </svg>
                            </button>							
							</td>
				      	</tr>
                    @endforeach
				    </tbody>
				    <tfoot>
						<tr>
							<td><a href="{{ route('index') }}" class="btn btn-info text-white"><i class="fa fa-angle-left"></i>{{__('shop.basket.continue_shopping')}}</a></td>
							<td colspan="2" class="hidden-xs"></td>
							<td class="hidden-xs text-center" style="width:10%;"><strong>{{__('shop.basket.total')}} : {{number_format($sum,2)}} </strong></td>
							<td><a href="#" class="btn btn-success btn-block">{{__('shop.basket.pay')}} <i class="fa fa-angle-right"></i></a></td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
@endsection
@push('javascript')
<script>
const deleteurl = "{{ url('basket') }}/";
</script>
@endpush
@push('js-files')
<script src="{{ asset('js/delete.js') }}"></script>
@endpush