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
  <form action="/payment/{id}/{uid}" method="post">
  {{ csrf_field() }}
  <div class="card-body">
    <div class="table-responsive">
      <table class="table">
        <thead class=" text-primary">
       <th>PRO ID</th>
       <th>NAME</th>
       <th>CUST EMAIL</th>
       <th>Delivery Status</th>
                         <th>Pay Method</th>
                         <th>Pay Status</th>
       <th>AMOUNT</th>
    </thead>
    <tbody>

@foreach($orders as $bills)

   <tr>
       <td>{{ $bills->id }}</td>
       <td>{{ $bills->name  }}</td>
       <td>{{ $bills->email  }}</td>
       <td>{{$bills->status}}</td>
                      <td>{{$bills->payment_method}}</td>
                      <td>{{$bills->payment_status}}</td>
                      <td>{{$bills->price}}</td>             
                      @if ($bills->status!='Delivered')
                      <td><a class ="btn btn-success" href="/payment/{{$bills->product_id}}/{{$bills->email}}">Update Status</a></td>
                      <td><a class ="btn btn-danger" href="/payment/{{$bills->product_id}}/{{$bills->email}}">CANCEL</a></td>
                      @endif
       
       </tr>
 @endforeach
</tbody>
  </table> 
  </form>
</form>

</div>
</div>
</div>
</div>
</div>

@endsection


@section('scripts')

@endsection
