@extends('master')
@section('content')
<div class=" custom-login">
<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
        <form action="/ch" method="POST" >
          @csrf
          @if (session('error'))
          <div class="alert alert-danger"role="alert">
            {{session('error')}}
          </div>
              
          @endif
          <table class="table tbl-clr"  >
            <tbody>
                <tr>  
                    <td>
                      
                      <div class="form-group">
                       <label for="exampleInputPassword1">Current Password</label></td>
                       <td> <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" >
                     </div></td>
                     </tr>
          <tr>  
           <td>
             
             <div class="form-group">
              <label for="exampleInputPassword2"> New Password</label></td>
              <td> <input type="password" name="npassword" class="form-control" id="exampleInputPassword2" placeholder="New Password">
            </div></td>
            </tr>
            <tr>  
                <td>
                  
                  <div class="form-group">
                   <label for="exampleInputPassword3">Confirm Password</label></td>
                   <td> <input type="password" name="cpassword" class="form-control" id="exampleInputPassword3" placeholder="Re-enter new Password" >
                 </div></td>
                 </tr>
          <tr>
            <td><button type="submit" class="btn btn-success">Change</button>
                 </td>
          </tr>
          <tr>
          </tbody>
          </table>
          </form>
        </div>
    </div></div>
</div>
@endsection