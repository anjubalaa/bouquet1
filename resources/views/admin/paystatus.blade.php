@extends('layouts.mast')

@section('title')
    Pay Detail | floral 
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Product Pay</h4>
        </div>
        
    @foreach($cost as $bills)
    <form action="/paentstatus/{{$bills->product_id}}/{{$bills->email}}" method="get">
        @csrf
    <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
    
        
            <tr>
                <td>Product Name</td>
                <td><input value="{{ $bills->product_id }}" type="text"  class="form-control"></td>
            </tr>
            
            <tr>
                <td>Customer Email</td>
                <td><input value="{{ $bills->email }}" type="email"  class="form-control"></td>
            </tr>
            <tr>
                <td>Amount</td>
                <td><input value="{{ $bills->price }}" type="text"  class="form-control"></td>
            </tr>
            <tr>
                <td></td>
                <td><button class="btn btn-warning">SUBMIT</button></td>
            </tr>
        </thead>
        </table>
    </form>
    @endforeach
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
