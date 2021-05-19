@extends('layouts.mast')

@section('title')
    Status Update| floral 
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Confirm Payment</h4>
        </div>@foreach($cost as $bills)
        
            @csrf
    
          <div class="table-responsive">
            <table class="table">
             
            <tr>
                <td>Product Name</td>
                <td><input value="" type="text"  class="form-control"></td>
            </tr>
            
            <tr>
                <td>Customer Email</td>
                <td><input value="" type="email"  class="form-control"></td>
            </tr>
            
            <tr>
                <td></td>
                <td><button class="btn btn-warning">SUBMIT</button></td>
            </tr>
            </table>
        
        @endforeach
          </div>
        </div>
      </div>
    </div>
</div>

@endsection


@section('scripts')
    
@endsection
