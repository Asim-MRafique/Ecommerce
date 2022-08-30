@extends('Master')
@section('content')
<div class=" custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h1>Orders List Items</h1>
            <br>
            @foreach($orders as $items)
            <div class="row cart-list-devider">
                <div class="col-sm-3">
                    <div class="trending-image">
                        <img class="image-list" src="{{$items->gallery}}">
                    </div>
                </div>
                <div class="col-sm-3 ">
                    <h4>Item :{{$items->name}}</h4>
                    <h4>Price :{{$items->price}}/- PKR</h4>
                    <p>Status :{{$items->status}}</p>
                    <p>Address :{{$items->address}}</p>
                    <p>Payment :{{$items->payment_method}}</p>
                </div>
            </div>
            @endforeach
            <br>
            <br>
        </div>
    </div>
</div>

@endsection