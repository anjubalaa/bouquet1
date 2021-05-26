@extends('master')
@section('content')
<div class="custom-register">
    
        <div class="col-sm-4 col-sm-offset-4">
        <form action="/register" method="POST" >
          @csrf
          <table class="table tbl-clr"  >
            <tbody>
            
            <tr>
              <td>
          <div  class="form-group">
            <label for="exampleInputEmail1">User Name</label></td>
           <td> <input type="text" name="name" class="form-control" id="exampleInputEmail1"  placeholder="Enter username" required="required" >
            
          </div>
        </td>
        </tr>
        <tr>
          <td>
            <div  class="form-group">
              <label for="exampleInputEmail1">Email address</label></td>
              <td> <input type="email" name="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email"required="required">
              
            </div>
          </td>
        </tr>
        <tr><td>
            <div class="form-group">
              <label for="exampleInputPlace1">Place</label></td>
              <td><input type="place" name="place" class="form-control" id="exampleInputPlace1" placeholder="Place" required="required">
            </div>
          </td>
          </tr>
          <tr><td>
            <div class="form-group">
              <label for="exampleInputmobile1">Phone No</label></td>
              <td><input type="mobile" name="mobile" class="form-control" id="exampleInputmobile1" placeholder="Mobile No" required="required">
            </div>
          </td>
          </tr>
          <tr>
            <td>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label></td>
             <td> <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="required">
            </div>
          </td>
          </tr>
          <tr>
            <td>
            <button type="submit" class="btn btn-primary">REGISTER</button></td>
            <br><br>
          </tr>
        </tbody>
      </table>
          </form>
          
         
        </div>
    </div>
</div>
@endsection