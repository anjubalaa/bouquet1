@extends('master')
@section('content')
<div class=" custom-login">
<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
        <form action="/login" method="POST" >
          @csrf
          <table class="table tbl-clr"  >
            <tbody>
            
            <tr>
              <td>
              <div  class="form-group">
              <label for="exampleInputEmail1">Email address</label></td>
              <td><input type="email" name="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter email" required="required">
              </div>
          </td>
        </tr>
          <tr>  
           <td>
             
             <div class="form-group">
              <label for="exampleInputPassword1">Password</label></td>
              <td> <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="required">
            </div></td>
            </tr>
          <tr>
            <td> <button type="submit" class="btn btn-success">LOGIN</button></td>
           
          </tr>
          <tr>
            <td>  <label for="">Don't have an account! <a href="/register">Sign Up Here</a></label></td> 
          </tr>
          </tbody>
          </table>
          </form>
        </div>
    </div></div>
</div>
@endsection