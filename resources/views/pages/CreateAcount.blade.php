<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

        <!-- Styles -->
        <style>
          
        </style>
    </head>
    <body>
    <div class="container">
<br>    




<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>

<<<<<<< HEAD
	<form method="POST" action="{{ Route('Register') }}">
        @csrf
=======
	<form>
>>>>>>> a55ca1ea3284fd74c9a72dba4e83008ec3856668
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
<<<<<<< HEAD
        <input name="name" class="form-control" placeholder="Full name" type="text">
=======
        <input name="" class="form-control" placeholder="Full name" type="text">
>>>>>>> a55ca1ea3284fd74c9a72dba4e83008ec3856668
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
<<<<<<< HEAD
        <input name="email" class="form-control" placeholder="Email address" type="email">
=======
        <input name="" class="form-control" placeholder="Email address" type="email">
>>>>>>> a55ca1ea3284fd74c9a72dba4e83008ec3856668
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select class="custom-select" style="max-width: 120px;">

		</select>
<<<<<<< HEAD
    	<input name="phone" class="form-control" placeholder="Phone number" type="text">
=======
    	<input name="" class="form-control" placeholder="Phone number" type="text">
>>>>>>> a55ca1ea3284fd74c9a72dba4e83008ec3856668
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		</div>
<<<<<<< HEAD
        <input name="address" class="form-control" placeholder="Direccion" type="text">
=======
        <input name="" class="form-control" placeholder="Direccion" type="email">
>>>>>>> a55ca1ea3284fd74c9a72dba4e83008ec3856668

	</div> <!-- form-group end.// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
<<<<<<< HEAD
        <input name="password"  class="form-control" placeholder="Create password" type="password">
=======
        <input class="form-control" placeholder="Create password" type="password">
>>>>>>> a55ca1ea3284fd74c9a72dba4e83008ec3856668
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
<<<<<<< HEAD
        <input name="password_repeat"  class="form-control" placeholder="Repeat password" type="password">
=======
        <input class="form-control" placeholder="Repeat password" type="password">
>>>>>>> a55ca1ea3284fd74c9a72dba4e83008ec3856668
    </div> <!-- form-group// -->                                      
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="/login">Log In</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 

    </body>
</html>
