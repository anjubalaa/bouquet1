@extends('layouts.mast')

@section('title')
    Tables | floral 
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Search Results </h4>
          <div class="container">
            
        </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <div class="trending-wrapper">
                   
                    @foreach ($products as $item)
                    
                    <div class="search-item">
                      <a href="detail/{{$item['id']}} ">
                      <img class="trend-img" src=" {{$item['gallery']}} " >
                      <div class="">
                        <h2>{{$item['name']}}</h2>
                        <h5>{{$item['category']}}</h5>
                      </a>
                        
                      </div>
                  
                    @endforeach
                </div>
                
                  </table> 
                  </form>
              </thead>
              <tbody>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
</div>
    
@endsection


@section('scripts')
    
@endsection











