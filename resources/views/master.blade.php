<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>On Shop</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>
    {{View::make('header')}}
  
 @yield('content')
    {{View::make('fooder')}}
</body>
<style>
    
    .custom-login{
        height: 500px;
        padding-top: 100px;
    }
    img.slider-img{
        height: 200px !important
        
    }
    .custom-product{
        height: 600px !important;
       
    }
    .slider-text{
        background-color: #35443585 !important;
        height: 150px ;
        
    
    }
    .trending-image{
        height: 100px;
        display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top: 25px;

    }   
    .trening-item{
        
        float: left;
        width: 20%;
        background-image: url(https://images01.nicepage.com/c461c07a441a5d220e8feb1a/7dbf276908d85a3c8fb0e927/ttt.jpg);
        background-position: 50% 50%;
         box-shadow: 5px 5px 0px 0 rgb(126 115 148 / 30%);  
         margin: 30px;  
    }
    .trending-wrapper{
        margin: 30px;
        
    }
    .detail-img{
        height: 200px;
    }
    .search-box{
        width: 500px !important
    }
    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px
    }
</style>
</html>