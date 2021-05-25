<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FLOWER SHOP</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    
   
    {{View::make('header')}}
    @yield('content')
    

    {{View::make('footer')}}



    
</body>
<style>
    .custom-login
    {
        height: 500px;
        padding-top: 100px;
        background-image: url("https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/close-up-of-fresh-pink-tulips-against-white-royalty-free-image-1032762878-1557245338.jpg");
        height: 500px; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
    }

    .custom-register
    {
        height: 500px;
        padding-top: 50px;
        background-image: url("https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/close-up-of-fresh-pink-tulips-against-white-royalty-free-image-1032762878-1557245338.jpg");
        height: 500px; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; /* Resize the background image to cover the entire container */
    }

    .custom-con
    {
        
        background-image: url("https://image.freepik.com/free-photo/pink-rose-vase-wood-background_1339-17816.jpg");
        background-position: top; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; 
    }
    img.slid-img
    {
        height: 400px !important

    }
    .custom-order
    {
        height: 600px;
        background-image: url(" https://www.pixelstalk.net/wp-content/uploads/images1/Pink-peony-white-background-wallpaper-hd.jpg");
        background-position: top; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover;
        }
    .custom-product
    {
        height: 1000px;
        background-image: url(" https://www.pixelstalk.net/wp-content/uploads/images1/Pink-peony-white-background-wallpaper-hd.jpg");
        

    }
    .custom-pro
    {
        height: 1000px;
        

    }

    .slider-text
    {
        color: rgba(218, 45, 45, 0.664);
        background-color: #a9444233 !important
    }
    .trend-img
    {
        height: 100px;
    }
    .trend-item
    {
        float: left;
        width: 25%;
    }
    .trending-wrapper
    {
        margin: 40px;
        
       
    }
    .detail-img
    {
        height: 400px;
    }
    .search-box
    {
        width: 500px !important
    }
    .cart-list-devider
    {
        border-bottom: 1px solid cornflowerblue;
        margin-bottom: 20px;
        padding-bottom: 20px;

    }
    .floral-nav
    {
        
        font-family: montserrat;
	font-weight: 100;
	font-style: normal;
	color:rgb(246, 249, 250);
        
    }
    .bg-lin
    {
        background-color: rgb(0, 0, 0);
    }
    .txt-lin
    {
        color: beige;
    }

    .txt-line
    {
        background-color: rgba(85, 82, 82, 0.712);
    }
    .nav-c
    {
        background-color: black;
    }
    .pro-back
    {
background-color: rgb(240, 231, 231);  
    }
    .h-l
    {
        color: beige
    }
    .tbl-clr
    {
       
        background-color: rgba(238, 125, 223, 0.4)
    }
</style>


</html>