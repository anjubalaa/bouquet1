<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total=ProductController::cartItem();
}


?>

  
<nav class="navbar navbar-inverse nav-c">
  <div class="container-fluid">
    
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <h3 class="floral-nav">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsFB_ae7Fk_J2lE6SHusAZ32OFpiHBA3eReg&usqp=CAU" height="90" width="90">
      FLORAL SHOP</h3>
      <ul class="nav navbar-nav">
        <li role="presentation" ><a href="/">HOME</a></li>
        <li role="presentation"><a href="/myorder">ORDER</a></li>
        <li role="presentation"><a href="/about">ABOUT US</a></li>
        <li role="presentation"><a href="/contact">CONTACT US</a></li>
      </ul>
      <form action="/search" class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" name="query" class="form-control search-box" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">SEARCH</button>
      </form>
      
      <ul class="nav navbar-nav navbar-right">

        
        <li role="presentation"><a href="/cartlist"><i class="now-ui-icons shopping_cart-simple"></i>CART( {{$total}} )</a></li>
        @if(Session::has('user'))
      
      <li class="dropdown">
        
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/logout">LOGOUT</a></li>
          <li><a href="/ch">CHANGE PASSWORD</a></li>
        </ul>
      </li>
          
      @else
      <li><a href="/login">LOGIN</a>  </li>
      <li><a href="/register">REGISTER</a>  </li>
      @endif
    </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</div>
</nav>
