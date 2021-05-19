@extends('master')
@section('content')
<div class="  custom-product">
   
    <div class="col-sm-10">
        <div class="container">
            <h2>ORDER</h2>
                       
            <table class="table">
              <thead>
                <tr>
                  <td>Amount </td>
                  <td>$ {{$total}} </td>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Tax </td>
                  <td>$10</td>
                  
                </tr>
                <tr>
                  <td>Delivery</td>
                  <td>$10</td>
                  
                </tr>
                <tr>
                  <td>Toatal Amount </td>
                  <td>$ {{$total+20}} </td>
                 
                </tr>
                
              </tbody>
            </table>
            <form action="/orderplace" method="POST">
              @csrf
                <div class="form-group">
                    <textarea name="address"  cols="40" rows="5" placeholder=" Delivery Address"></textarea>
                  </div>
                  <div class="form-group">
                <input type="text" name="zip" class="form-control"  placeholder="Pincode"><br>
                <br>
              </div>
              <div class="form-group">
                <input type="text" name="mobile" class="form-control" placeholder="mobile no." ><br>
                <br>
              </div>
                <label for="message">*if required </label><br>
                <br>
                <textarea name="message"  cols="20" rows="5" placeholder=" Any Message"></textarea><br>
                <div class="form-group">
                    <br>
                  <h3>PAYMENT</h3>
                 
                  <br>
                  
                  <input type="radio" value="Online_Payment" name="payment" > <span> Online Payment</span><br><br>
                  
                  <input type="radio" value="Cash on delivery" name="payment" > <span> Cash on Delivery</span><br><br>
                </div>
                
                <button type="submit" class="btn btn-success">BUY</button>
              </form>
          </div>
          
          </body>
          </html>
          

    </div> 
    
</div>
@endsection