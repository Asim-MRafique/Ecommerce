@extends('Master')
@section('content')
<div class=" custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h1>Cart List Items</h1>
            
                @foreach($products as $items)
                <div class="row cart-list-devider">
                <div class="col-sm-3">
                    <div class="trending-image">
                        <img class="image-list" src="{{$items->gallery}}">

                    </div>
                </div>
                <div class="col-sm-3">
                    <h4>{{$items->name}}</h4>
                    <h4>{{$items->price}}</h4>
                </div>
                <div class="col-sm-3">
                    <p>{{$items->description}}</p>
                </div>
                <div class="col-sm-3">
                   <a href="/removecart/{{$items->cart_id}}"  class="btn btn-warning">Remove From Cart</a>
                </div>
                </div>
                @endforeach
            
        </div>
    </div>
</div>

@endsection