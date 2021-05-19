@extends('master')
@section('content')
<div class="custom-order">   
    <div class="col-sm-10">
        
            <h3>MY ORDERS</h3>
           
            <br><br>
            @foreach ($orders as $item)
            <div class=" row search-item cart-list-devider">
              <div class="col-sm-3">
                <a href="detail/{{$item->id}} ">
                    <img class="trend-img" src=" {{$item->gallery}} " >
                    </a>
              </div>
              <div class="col-sm-4">
                    <div class="">
                      <h2> Name :{{$item->name}}</h2>
                      <h5>Category :{{$item->category}}</h5>
                      <h5>Price :{{$item->price}}</h5>
                      <h5>Delivery Status :{{$item->status}}</h5>
                      
                      <h5>Payment Status :{{$item->payment_status}}</h5>
                      <h5>Payment Method:{{$item->payment_method}}</h5>
                      
                    </div>                   
              </div>
                             
              </div>         
            @endforeach
            <br><br>
            
        </div>
    </div>    
</div>
@endsection