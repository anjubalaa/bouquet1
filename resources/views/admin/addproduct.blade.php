@extends('layouts.mast')

@section('title')
   Add Stock  | floral 
@endsection


@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Add Product </h4>
          <div class="container">
            <ul class="right">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <button class="btn btn-primary me-md-2" type="button" onclick="window.location.href='/viewproducts';" > Back </button>
              
            </div>
            
          </ul>
        </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                

                <h4><center><b>FILL PRODUCT DETAILS</h4>
                  <form action="/productread" method="post">
                  @csrf
                      <table class="table table-borderless">
                          <tr>
                              <td>Product Name</td>
                              <td><input type="text" name="name" placeholder="Bouquet name" class="form-control"></td>
                          </tr>
                          <tr>
                              <td>Product Price</td>
                              <td><input type="text" name="price" placeholder="Price" class="form-control"></td>
                          </tr>
                          <tr>
                            <td>Category</td>
                            <td><input type="text" name="category" placeholder="Category" class="form-control"></td>
                        </tr>
                          <tr>
                              <td>Delivery Period</td>
                              <td><input type="text" name="description" placeholder="Delivery" class="form-control"></td>
                          </tr>
                          <tr>
                              <td>Image</td>
                              <td><input type="text" placeholder="Enter image url" name="gallery" class="form-control"></td>
                          </tr>
                          <tr>
                              <td></td>
                              <td><button class="btn btn-warning">ADD</button></td>
                          </tr>
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


