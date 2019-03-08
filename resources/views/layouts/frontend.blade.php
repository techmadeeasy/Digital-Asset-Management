<!DOCTYPE html>
    <html lang="{{ app()->getLocale() }}">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <!-- CSRF Token -->
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
            <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
            <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/media/files.css') }}">
            <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/media/style.css') }}">
            <title>{{ config('app.name', 'syndication-bazaar') }}</title>
            <!-- Styles -->
            
            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        </head>
        <body>
            <div id="app">
                <nav class="navbar navbar-default navbar-static-top">
                    <div class="container">
                        <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                            <ul class="nav navbar-nav">
                                &nbsp;
                            </ul>

                    <!-- Right Side Of Navbar -->
                            <ul class="nav navbar-nav navbar-right">
                                <!-- Authentication Links -->
                                @guest
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @endguest
                                @if ( Auth::check() && Auth::user()->role_id==2)
                                <span>This is it</span>
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>
                    <header>
                        <div class="container-fluid">
                            <nav class="navbar navbar-expand-lg navbar navbar-dark">
                                <a class="navbar-brand" href="{{ url('/') }}"><img src="http://www.syndication-bazaar.com/wp-content/uploads/2018/02/mobile.png" alt=""></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                    </button>
                                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                            <div class="col-md-4 col-sm-12" style="padding-top:  25px;">
                                                <ul class="list-inline" style="text-align:  center;">
                                                        <li class="mr-0 nav-item list-inline-item" style="position:static;">
                                                            <a class="nav-link"  id="this" href="https://www.syndication-bazaar.com/subscriptions/"> Subscriptions</a>
                                                            </li>
                                                    <li class="nav-item dropdown mr-0 has-mega-menu list-inline-item item" style="position:static;">
                                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Images</a>  <div class="dropdown-menu" style="width:150%">
                                                            <div class="px-0" style="width:118%" >
                                                                <div class="row">
                                                                    <div class="col-md-2 col-xs-6">
                                                                        <ul class="list-unstyled black">
                                                                            <li><img class="align-self-center ml-1 hide" src="http://www.syndication-bazaar.com/wp-content/uploads/2017/12/HandLBandA17_outdoorreno_98R0006.jpg" alt="" srcset="">
                                                                                <a class="dropdown-item" href="http://www.syndication-bazaar.com/product-category/architectures/">Architecture</a></li>
                                                                            <li>
                                                                                <ul class="list-unstyled">
                                                                                    <li><a  class=" dropdown-header" href="http://www.syndication-bazaar.com/product-category/architectures/houses/">House</a></li>
                                                                                    <li><a  class=" dropdown-header" href="http://www.syndication-bazaar.com/product-category/architectures/decor/">Decor</a></li>
                                                                                    <li><a  class=" dropdown-header" href="http://www.syndication-bazaar.com/product-category/architectures/gardens-outdoors/">Gardens</a></li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                <div class="col-md-2 col-xs-6">
                                                                        <ul class="list-unstyled">
                                                                                <li><img class="align-self-center ml-1 hide" src="http://www.syndication-bazaar.com/wp-content/uploads/2017/12/HandL1116_leisurefood_O2A7605.jpg" alt="" srcset="">
                                                                                    <a class="dropdown-item" href="http://www.syndication-bazaar.com/product-category/food-and-drink/">Food and Drink</a></li>
                                                                                <li>
                                                                                    <ul class="list-unstyled">
                                                                                        <li><a  class=" dropdown-header" href="http://www.syndication-bazaar.com/product-category/food-and-drink/food/">Food</a></li>
                                                                                        <li><a  class=" dropdown-header" href="http://www.syndication-bazaar.com/product-category/food-and-drink/drinks/">Drinks</a></li>
                                                                                        <li><a  class=" dropdown-header" href="http://www.syndication-bazaar.com/product-category/food-and-drink/dessert/">Dessert</a></li>
                                                                                        <li><a  class=" dropdown-header" href="http://www.syndication-bazaar.com/product-category/food-and-drink/chefs/">Chefs</a></li>
                                                                                        <li><a  class=" dropdown-header" href="http://www.syndication-bazaar.com/product-category/food-and-drink/restaurants/">Restaurant</a></li>
                                                                                        <li><a  class=" dropdown-header" href="http://www.syndication-bazaar.com/product-category/food-and-drink/bars/">Bars</a></li>
                                                                                        <li><a  class=" dropdown-header" href="http://www.syndication-bazaar.com/product-category/food-and-drink/brewing-equipment/">Brewing equipment</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <ul class="list-unstyled">
                                                                                <li><img class="align-self-center ml-1 hide" src="http://www.syndication-bazaar.com/wp-content/uploads/2017/12/HandL1116_houseprice_houseandleisure167.jpg" alt="" srcset="">
                                                                                    <a class="dropdown-item" href="http://www.syndication-bazaar.com/product-category/lifestyle/">Lifestyle</a></li>
                                                                                <li>
                                                                                    <ul class="list-unstyled">
                                                                                        <li><a  class=" dropdown-header" href="http://www.syndication-bazaar.com/product-category/lifestyle/cultures/">Cultures</a></li>
                                                                                        <li><a  class=" dropdown-header" href="http://www.syndication-bazaar.com/product-category/lifestyle/people/">People</a></li>
                                                                                        <li><a  class=" dropdown-header" href="http://www.syndication-bazaar.com/product-category/lifestyle/travel/">Travel</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                            <ul class="list-unstyled">
                                                                                    <li><img class="align-self-center ml-1 hide" src="http://www.syndication-bazaar.com/wp-content/uploads/2017/12/2503164-1.jpg" alt="" srcset="">
                                                                                        <a class="dropdown-item" href="http://www.syndication-bazaar.com/product-category/nature/">Nature</a></li>
                                                                                    <li>
                                                                                        <ul class="list-unstyled">
                                                                                            <li><a  class=" dropdown-header" href="http://www.syndication-bazaar.com/product-category/nature/sea/">Sea</a></li>
                                                                                        </ul>
                                                                                    </li>
                                                                                </ul>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                            <ul class="list-unstyled">
                                                                                    <li><img class="align-self-center ml-1 hide" src="http://www.syndication-bazaar.com/wp-content/uploads/2018/03/2503186.jpg" alt="" srcset="">
                                                                                        <a class="dropdown-item" href="http://www.syndication-bazaar.com/product-category/stills/">Stills</a></li>
                                                                                    <li>
                                                                                        <ul class="list-unstyled">
                                                                                            <li><a  class=" dropdown-header" href="#">Decor Stills</a></li>
                                                                                            
                                                                                        </ul>
                                                                                    </li>
                                                                                </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                        <li class="nav-item dropdown mr-0 has-mega-menu list-inline-item" style="position:static;">
                                                                    <a class="nav-link" href="http://www.syndication-bazaar.com/premium/">Premium Images</a>
                                                                </li>
                                                    <li class="nav-item dropdown mr-0 has-mega-menu list-inline-item" style="position:static;">
                                                            <a class="nav-link dropdown-toggle" id="featured" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Featured Articles</a>
                                                    
                                                            <div class="dropdown-menu eheh" style="width: 40%">
                                                                <div class="px-0">
                                                                    <div class="row" style="width: 260%">
                                                                        <div class="col-md-2 col-xs-6">
                                                                            <ul class="list-unstyled list-inline">
                                                                                <li ><a class="dropdown-item list-inline-item" href="#">Magazine</a></li>
                                                                                <li>
                                                                                    <ul class="list-unstyled">
                                                                                        <li><a  class=" dropdown-header" href="{{ route('publication', 2)}}">House and Leisure</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    
                                                                        </div>
                                                                        </div>
                                                            </div>
                                                            </li>
                                                            <li class="nav-item mr-0 list-inline-item hides-md shows-xs" style="position:static;">
                                                            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i></a>
                                                            </li>
                                                            <li class="mr-0 nav-item list-inline-item hides-md shows-xs" style="position:static;">
                                                            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-heart"></i></a>
                                                            </li>
                                                            <li class="mr-0 nav-item list-inline-item hides-md shows-xs" style="position:static;">
                                                            <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-shopping-cart"></i></a>
                                                            </li>
                                                </ul>
                </div>
                
                <div class="col-md-4 col-sm-12 col-xs-6">
		 <form role="search" method="get" class="form search-form" action="/index.php">
<div class="input-group">
      <input name="s" type="text" class="form-control htn" placeholder="Search in this site">
      <span class="input-group-btn">
        <button type="submit" value="Search" class="btn htnsn" type="button">SEARCH</button>
      </span>
    </div>
    </form>
  </div>
  <div class="col-md-4 hides-xs" style="padding-top:  25px;">
      <ul class="list-inline text-right">
      <li class="nav-item mr-0 list-inline-item item" style="position:static;">
@guest
                     <a class="nav-link"  href="/login"  aria-haspopup="true" aria-expanded="false">Register/Login</a>
@else
        <a class="nav-link"  href="/logout"  aria-haspopup="true" aria-expanded="false">Logout</a>
@endguest
							</li>
							<li class="nav-item mr-0 list-inline-item" style="position:static;">
							<a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-heart"></i> Mywishlist</a>
							</li>
							<li class="mr-0 nav-item list-inline-item" style="position:static;">
							<a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-shopping-cart" ></i> Cart</a>
							</li>
							</ul>
  </div>
            </div>
        </nav>
</div>
    </header> 
    <div class="container-fluid bar">
         <div class="row">
         <div class="breadcrumbs col-md-4">
             <ul class="list-unstyled list-inline" style="padding-top: 9px;">
                 <li class="list-inline-item">
                     <a class="bread" href="http://www.syndication-bazaar.com/">Home </a><i class="fas fa-angle-right"></i>
                 </li>
                 <li class="list-inline-item feat">
                   Featured Articles <i class="fas fa-angle-right"></i>
                 </li>
                 <li class="list-inline-item">
                     <a class="bread" href="{{ route('publication', 2)}}">House and Leisure Editions </a><i class="fas fa-angle-right"></i>
                 </li>
                 @isset($years)
                 <li class="list-inline-item">
                     <a class="bread" href="/publication/{{$years->id}}">{{ $years->name}} </a><i class="fas fa-angle-right"></i>
                 </li>
                 @endisset
                 @isset($edition)
                 <li class="list-inline-item">
                     <a class="bread" href="/article/{{$edition->id}}">{{ $edition->name}} </a><i class="fas fa-angle-right"></i>
                 </li>
                 @endisset
                 @isset($albm)
                 <li class="list-inline-item">
                     <a class="bread" href="/article/{{$albm->id}}">{{ $albm->name}} </a><i class="fas fa-angle-right"></i>
                 </li>
                 @endisset
                  <li class="list-inline-item feat">
                 </li>
             </ul>
         </div>
         <div class="col-md-4">
       <h2 class="fth1" ><center> </center> </h2></div>

       <div class="col-md-4"></div>
       </div>
    </div>

    <main id="main-container">
<div class="mt_80 container-fluid">
    <div class="row">
    <div class="col-md-2">
    <div class="btn-group dropright">
  <button type="button" class="btn btn-secondary dropdown-toggle slt" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Publications
  </button>
 <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <a class="dropdown-item" href="{{ route('publication', 2)}}">House and Leisure</a>
  </div>
</div>
<div class="btn-group dropright test">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    2019
  </button>
  <div class="dropdown-menu tops" aria-labelledby="dropdownMenu1">
  <a class="dropdown-item" href="{{ route('publication', 3)}}">View All</a>
    <a class="dropdown-item" href="#">February</a>
  </div>
</div>
<div class="btn-group dropright test">
  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    2018
  </button>
  <div class="dropdown-menu tops" aria-labelledby="dropdownMenu1">
      <a class="dropdown-item" href="{{ route('publication', 2)}}">View All</a>
    <a class="dropdown-item" href="#">January</a>
    <a class="dropdown-item" href="#">February</a>
    <a class="dropdown-item" href="http://partners.syndication-bazaar.com/uploader/archive.php?link=March 2018">March</a>
 <a class="dropdown-item" href="http://partners.syndication-bazaar.com/uploader/archive.php?link=April 2018">April</a>
 <a class="dropdown-item" href="http://partners.syndication-bazaar.com/uploader/archive.php?link=May 2018">May</a>
 <a class="dropdown-item" href="http://partners.syndication-bazaar.com/uploader/archive.php?link=June 2018">June</a>
 <a class="dropdown-item" href="http://partners.syndication-bazaar.com/uploader/archive.php?link=July 2018">July</a>
 <a class="dropdown-item" href="http://partners.syndication-bazaar.com/uploader/archive.php?link=August 2018">August</a>
 <a class="dropdown-item" href="http://partners.syndication-bazaar.com/uploader/archive.php?link=September 2018">September</a>
  <a class="dropdown-item" href="http://partners.syndication-bazaar.com/uploader/archive.php?link=October 2018">October</a>
   <a class="dropdown-item" href="http://partners.syndication-bazaar.com/uploader/archive.php?link=November 2018">November</a>
   <a class="dropdown-item" href="http://partners.syndication-bazaar.com/uploader/archive.php?link=December 2018">December</a>
  </div>
</div>
</div>
@yield('content')
                        <div class="col-md-2"></div>
                        </div>
        </div>
        </main>
       
    </div>

    <!-- Scripts -->
<script>
    function showModel($id){
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById($id);
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
    }
</script>
  
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                
</body>
</html>
