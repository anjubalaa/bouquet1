@extends('master')
@section('content')
<div class="custom-order">
  
    <div class="col-sm-10">
        
            <h3>CART ITEMS</h3>
            
            <br><br>
            @foreach ($products as $item)
            <div class=" row search-item cart-list-devider">
              <div class="col-sm-3">
                <a href="detail/{{$item->id}} ">
                    <img class="trend-img" src=" {{$item->gallery}} " >
                    </a>
              </div>
              <div class="col-sm-4">
                    <div class="">
                      <h2>{{$item->name}}</h2>
                      <h5>{{$item->category}}</h5>
                      <h5>₹ {{$item->price}}</h5>
                      <h5>{{$item->description}}</h5>
                    </div>                   
              </div>
              <div class="col-sm-3">
                <a  class="btn btn-success" href="ordernow">Order Now</a>
              
                <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning" >Remove Cart</a>                
              </div>                
              </div>         
            @endforeach
            <br><br>
           
        </div>
    </div>    
</div>
</div>
@endsection