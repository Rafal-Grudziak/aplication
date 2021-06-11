@extends('layouts.app')

@section('content')

<div class="container pt-5">
              <div class="row">
                <div class="col-md-8 order-md-2 col-lg-9">
                  <div class="container-fluid">
                    <div class="row   mb-5">
                      <div class="col-12">
                        
                        <div class="btn-group float-md-right ml-3">
                          <button type="button" class="btn btn-lg btn-light"> <span class="fa fa-arrow-left"></span> </button>
                          <button type="button" class="btn btn-lg btn-light"> <span class="fa fa-arrow-right"></span> </button>
                        </div>
                        <div class="dropdown float-right">
                          <label class="mr-2">{{__('shop.welcome.view')}}:</label>
                          <a class="btn btn-lg btn-light dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">9 <span class="caret"></span></a>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" x-placement="bottom-end" style="will-change: transform; position: absolute; transform: translate3d(120px, 48px, 0px); top: 0px; left: 0px;">
                            <a class="dropdown-item" href="#">12</a>
                            <a class="dropdown-item" href="#">24</a>
                            <a class="dropdown-item" href="#">48</a>
                            <a class="dropdown-item" href="#">96</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">

                    @foreach($products as $product)
                      <div class="col-6 col-md-6 col-lg-4 mb-3">
                        <div class="card h-100 border-0">
                          <div class="card-img-top">
                            @if(!is_null($product->image_path))
                              <img src="{{asset('storage/'.$product->image_path)}}" class="img-fluid mx-auto d-block" alt="Card image cap">
                            @else
                              <img src="https://d18lp25pnz8h36.cloudfront.net/installations/common/img/image-not-found.png" class="img-fluid mx-auto d-block" alt="Card image cap">
                            @endif
                          </div>
                          <div class="card-body text-center">
                            <h4 class="card-title">
                              <a href="{{ route('item', $product->id) }}" class=" font-weight-bold text-dark text-uppercase small"> {{$product -> name}}</a>
                            </h4>
                            <h5 class="card-price small">
                              <i>{{$product -> price}} PLN</i>
                            </h5>
                          </div>
                        </div>
                      </div>
                      @endforeach

                    </div>
                    <div class="row sorting mb-5 mt-5">
                      <div class="col-12">
                        <div class="btn-group float-md-right ml-3">
                          <button type="button" class="btn btn-lg btn-light"> <span class="fa fa-arrow-left"></span> </button>
                          <button type="button" class="btn btn-lg btn-light"> <span class="fa fa-arrow-right"></span> </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 order-md-1 col-lg-3 sidebar-filter">
                  <h3 class="mt-0 mb-5">{{__('shop.welcome.number_of_products')}}: <span class="text-primary">{{count($products)}}</span></h3> 
                  <h6 class="text-uppercase font-weight-bold mb-3">{{__('shop.welcome.categories')}}</h6>
                  <form method="GET" action="{{ route('index.filter') }}">
                  @foreach($categories as $category)
                  <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="form-check-input" name="categories[]" value="{{$category->id}}">
                       <label for="{{$category->id}}">{{$category->name}}</label>
                    </div>
                  </div>
                  @endforeach
                  
                  <input type="submit" class="btn btn-lg btn-block btn-primary mt-5" value="{{__('shop.welcome.update_results')}}"></input>
                  </form>
                </div>

              </div>
            </div>
            

@endsection