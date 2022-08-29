<nav class="navbar navbar-default">
    <div class="container-fluid">

        <!-- BRAND -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#alignment-example" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">E-commerce</a>
        </div>

        <!-- COLLAPSIBLE NAVBAR -->
        <div class="collapse navbar-collapse" id="alignment-example">

            <!-- Links -->
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Downloads</a></li>
                <li><a href="#">Services</a></li>
            </ul>

            <!-- Search -->
            <form action="/search" class="navbar-form navbar-left " role="search">
                <div class="form-group">
                    <input type="text" name="query" class="form-control search-box">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form>
            <!-- <ul class="cart-all">
    <li> <a class="nav navbar-form navbar-right  "> Cart(0)</a></li>
   
</ul> -->
            <li class="dropdown navbar-form navbar-right">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    
                    <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Log Out</a></li>
                </ul>
            </li>
        </div>

    </div>
</nav>