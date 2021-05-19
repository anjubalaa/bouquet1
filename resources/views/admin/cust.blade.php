@extends('layouts.mast')

@section('title')
    Customers details| floral 
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Customers </h4>
          <div class="container">
            
        </div>
        </div>
        <form action="/cust" method="post">
          {{ csrf_field() }}
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                
                  
                       <th>NAME</th>
                       <th>PLACE</th>
                       <th>EMAIL</th>
                       <th>PHONE NO</th>
                      </thead>
              <tbody>
                
                @foreach($customers as $item)
                @if ($item->name!='admin')
                <tr>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->place }}</td>
                  <td>{{ $item->email }}</td>
                  <td>{{ $item->mobile }}</td>
                  <td><a class ="btn btn-danger" href="/delecust/{{$item->id}} ">DELETE</a></td>
                  </tr>
                @endif
                   
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


