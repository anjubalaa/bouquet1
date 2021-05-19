@extends('master')
@section('content')
<div class="trending-wrapper">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-4">
        
            <h3>Results for Searching</h3>
            @foreach ($products as $item)
            
            <div class="search-item">
              <a href="detail/{{$item['id']}} ">
              <img class="trend-img" src=" {{$item['gallery']}} " >
              <div class="">
                <h2>{{$item['name']}}</h2>
                <h5>{{$item['category']}}</h5>
              </a>
            </div>
              </div>
          
            @endforeach
        </div>
    </div>     
</div>
<div style="clear: both" class="panel panel-warning">
@endsection