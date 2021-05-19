@extends('layouts.mast')

@section('title')
    Order Detail | floral 
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Order Detail</h4>
        </div>

        
        <form action="/orderview" method="post">
          {{ csrf_field() }}
        <div class="card-body">
          
            <table class="table">
              <thead class=" text-primary">
                        
                         <th>Name</th>
                         <th>Address</th>
                         <th>Delivery Status</th>
                         <th>Payment Method</th>
                         <th>Payment Status</th>
              </thead>
              <tbody>
                @foreach ($orders as $item)
            
                <tr>
                   
                      <td>{{$item->name}}</td>
                      <td>{{$item->address}}</td>
                     
                      <td>{{$item->status}}</td>
                      <td>{{$item->payment_method}}</td>
                      <td>{{$item->payment_status}}</td>
                      <td>
                      </td>
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


