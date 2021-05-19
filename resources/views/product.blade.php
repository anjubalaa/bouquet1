@extends('master')
@section('content')
<div class="  custom-product">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          @foreach ($products as $item)
          <div class="item {{$item['id']==1?'active' :'' }}">
            <a href="detail/{{$item['id']}} ">
                <img class="slid-img" src=" {{$item['gallery']}} " >
                <div class="carousel-caption slider-text">
                  <h3>{{$item['name']}}</h3>
                  <h4>{{$item['category']}}</h4>
                  <p>Make Your Special Ones Happier</p>
                </div>
            </a>
        </div>
          @endforeach
          
      
          
      
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
      <div class="trending-wrapper">
          <h3>Trending Bouquets</h3>
          @foreach ($products as $item)
          
          <div class="trend-item">
            <a href="detail/{{$item['id']}} ">
            <img class="trend-img" src=" {{$item['gallery']}} " >
            <div class="">
              <h3>{{$item['name']}}</h3>
            </a>
              
            </div>
        </div>
          @endforeach
      </div>
      
</div>
@endsection