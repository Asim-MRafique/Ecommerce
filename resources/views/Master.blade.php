<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Beginers</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<body>
    {{View::make('header')}}
    <br>
    @yield('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    {{View::make('footer')}}

</body>
<style>
    .custom-login{
        height: 400px;
        padding-top: 30px;
        padding-bottom: 10px;
    }
    img.slider-image{
        height: 250px !important;
    }
    .custom-product{
        height: 400px;
    }
    .slider-text{
        background-color: lightblue;
    }
.description-text{
    left: 35%;
}
.image-list{
height: 100px;
}
.trending-image{
    float:left;
    width: 20%;
}
trending-wrapper{
    border-width: 1px;
    border-color: black;
}
.image-detail
{
    height: 200px;
}
.search-box
{
    width: 450px !important;
}
/* .cart-all
{
    width: 100px !important;
} */
</style>

</html>