@extends('Master')
@section('content')
<div class=" custom-product">
<div class="col-sm-4"> <a href="#">Filter</a></div>
<div class="col-sm-8">
<div class="trending-wrapper">
        <h1>Search Result</h1>
        <div">
            @foreach($products as $items)
            <div class="trending-image">
                <a href="detail/{{$items['id']}}">

                    <img class="image-list" src="{{$items['gallery']}}">
                    <div class="">
                        <h3>{{$items['name']}}</h3>
                        <h3>{{$items['price']}}</h3>
                        <p>{{$items['description']}}</p>
                    </div>
                </a>
            </div>
            @endforeach
    </div>
</div>
</div>
</div>

@endsection