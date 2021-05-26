@extends('master')
@section('content')
<div class="  custom-product">
   <div class="container">
    <div class="row">
        <div class="col-sm-5 col-sm-offset-3">
   
            <h2>ORDER</h2>
                       
            <table class="table ">
              <tbody>
                <tr>
                  <td>Amount </td>
                  <td>₹ {{$total}} </td>
                  
                </tr>
              
             
                <tr>
                  <td>Tax </td>
                  <td>₹10</td>
                  
                </tr>
                <tr>
                  <td>Delivery</td>
                  <td>₹10</td>
                  
                </tr>
                <tr>
                  <td>Total Amount </td>
                  <td>₹ {{$total+20}} </td>
                 
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
               
              </div>
              <div class="form-group">
                <input type="text" name="mobile" class="form-control" placeholder="mobile no."  ><br>
               
              </div>
                <label for="message">*if required </label><br>
                
                <textarea name="message"  cols="40" rows="5" placeholder=" Any Message"></textarea><br>
                <div class="form-group">
                    <br>
                  <h2>Payment Method</h2>
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                  <script>
                      $(document).ready(function() {
                          $("input[type='radio']").change(function() {
                              if ($(this).val() == "Online-Payment") {
                                  $("#otherAnswer").show();
                                  $("#otheranswer").show();
                                  $("#otherAnswer1").show();
                                  $("#otheranswer2").show();

                              } else {
                                  $("#otherAnswer").hide();
                                  $("#otheranswer").hide();
                                  $("#otherAnswer1").hide();
                                  $("#otheranswer2").hide();
                              }
                          });
                      });
                  </script>
                  <body>
                  <br>
                  <input type="radio" value="Cash on delivery"  name="payment_method" > <span> Cash on Delivery</span><br><br>
                  <input type="radio" value="Online-Payment" name="payment_method"  ><span>Online Payment</span>
                  <br>
                  <br>
                  <input style="display:none;" type="text" class="form-control" name="otherAnswer" id="otherAnswer" placeholder="credit card number" >
                  <br>
                  
                  <input style="display:none;" type="text" class="form-control" name="otheranswer" id="otheranswer" placeholder="expires">
                  <br>
                  
                  <input style="display:none;" type="text" class="form-control" name="otherAnswer1" id="otherAnswer1" placeholder="cv code" >
                  <br>
                  
                  <input style="display:none;" type="text" class="form-control" name="otheranswer2" id="otheranswer2" placeholder="name on card">
                  
                  </body>
                </div>
                
            
                <button type="submit" class="btn btn-success">BUY</button>
                <br>
                <br>
              </form>
          </div>
          
          
          

    </div> 
    
</div>
@endsection