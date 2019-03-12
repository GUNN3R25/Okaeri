<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

@include('includes.stye')

</head>
<body>
@include('includes.header')


<div id="wrapper">

@include('includes.sidebar')



            <div class="container">



<div class="container">
  
  <div class="row">
    <div class="col-md-6">
    <h1>Add Product</h1>
    </div>
  </div>
  
    
  
<div class="row">
  
  <div class="col-md-6">
  <form role="form">
    
    <select class="form-control" id="productSelect"><option>Please Select a Product Group</option>
      <option>Bar Soaps</option>
      <option>Lotions</option>
      <option>Creams</option>
    </select>
    
 <div class="form-group">
   <label for="productname" class="loginFormElement">Producto:</label>
   <input class="form-control" id="productname" type="email">
 </div>
    
 <div class="form-group">
   <label for="productprice" class="loginFormElement">Product Price</label>
   <input class="form-control" id="productprice" type="email">
 </div>
   

<div class="form-group">
 
<label class="control-label">Product Image</label>
 
<input class="filestyle" data-icon="false" type="file">
 
</div>
    
    <div class="form-group">
      <label class="loginformelement" for="productdescription">Product Description</label>
  	  <input id="productdescription" class="form-control input-lg" placeholder="Large" type="text"><div class="container">
      </div>
 
    <button type="submit" id="loginSubmit" class="btn btn-success loginFormElement">Add Product</button>
  
    </div></form>
    
    </div>
  
  
  

  
  
  

     
        

        </div>
        <!-- /#page-content-wrapper -->

 

</div>
</body>
</html>