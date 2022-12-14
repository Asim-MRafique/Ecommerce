@extends('Master')
@section('content')
<div class=" custom-product">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            @foreach($products as $items)
            <div class="item {{$items['id']==1?'active':''}}">
               <a href="detail/{{$items['id']}}">
               <img class="slider-image" src="{{$items['gallery']}}" alt="Chania">
                <div class="carousel-caption slider-text description-text">
                    <h3>{{$items['name']}}</h3>
                    <p>{{$items['description']}}</p>
                </div>
               </a>
            </div>
            @endforeach
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="trending-wrapper" style="border-color: black; border:1px">
        <h1>Trending Products</h1>
        <div">
            @foreach($products as $items)
            <div class="trending-image">
               <a href="detail/{{$items['id']}}">

                <img class="image-list" src="{{$items['gallery']}}">
                <div class="">
                    <h3>{{$items['name']}}</h3>
                </div>
               </a>
            </div>
            @endforeach
    </div>
</div>
</div>
@endsection