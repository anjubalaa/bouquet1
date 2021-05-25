@extends('layouts.mast')

@section('title')
   Stocks | floral 
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Products </h4>
          <div class="container">
            <ul class="right">
            <button class="btn btn-success" onclick="window.location.href='/addproduct';" >Add Product  </button>
        
            
          </ul>
        </div>
        </div>

        


                  <form action="/viewproducts" method="post">
                    {{ csrf_field() }}
        <div class="card-body">
          <div class="table-responsive">
            
            <table class="table">
              <thead class=" text-primary">
                    
                    
                    
                         <th>NAME</th>
                         <th>PRICE</th>
                         <th>DESCRIPTION</th>
                         <th>BOUQUET IMAGE</th>
                     
                    </thead>
                    <tbody>
                  @foreach($products as $item)
                  
                    <tr>
                         <td>{{ $item->name }}</td>
                         <td> ₹ {{ $item->price  }}</td>
                         <td>{{ $item->description }}</td>
                         <td><img class="trend-img" src=" {{$item->gallery}} " ></td>
                         <td><a class ="btn btn-dark" href="editproduct/{{$item->id}}">EDIT</a></td>
                         <td><a class ="btn btn-danger" href="/destroy/{{$item->id}}">DELETE</a></td>
                  
                        </tr>
                   @endforeach
                    
                     
                    
                
              </tbody>
            </table>
          </form>
          </div>
        </div>
      </div>
    </div>
</div>
    
@endsection


@section('scripts')
    
@endsection







