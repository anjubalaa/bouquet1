@extends('layouts.mast')

@section('title')
    Tables | floral 
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Edit Products </h4>
          <div class="container">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary me-md-2" type="button" onclick="window.location.href='/viewproducts';" > Back </button>
                
              </div>
            </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">


    <h5><center><b>EDIT PRODUCT DETAILS</h5>
    <form action="/productedit/{{$products->id}}" method="post">
    @csrf
        <table class="table table-borderless">
            <tr>
                <td>Product Name</td>
                <td><input value="{{$products['name']}}" type="text" name="name" class="form-control"></td>
            </tr>
            <tr>
                <td>Product Price</td>
                <td><input value="{{$products['price']}}" type="text" name="price" class="form-control"></td>
            </tr>
            <tr>
                <td>Category</td>
                <td><input value="{{$products['category']}}" type="text" name="category" class="form-control"></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><input value="{{$products['description']}}" type="text" name="description" class="form-control"></td>
            </tr>
            <tr>
                <td>Gallery</td>
                <td><input value="{{$products['gallery']}}" type="text" name="gallery" class="form-control"></td>
            </tr>
            <tr>
                <td></td>
                <td><button class="btn btn-warning">SUBMIT</button></td>
            </tr>
        </table>
    </form>
    </div>
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







