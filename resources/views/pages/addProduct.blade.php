<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="/js/dropzone.js"></script>
<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">

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
    <h1>Agregar Producto</h1>
    </div>
  </div>
  
<br>
  
<div class="row">
  
<div class="col-md-6">

  <form role="form"  method="POST" action="{{ Route('NuevoProducto') }}">
    @csrf
    <!--<select class="form-control" id="productSelect"><option>Please Select a Product Group</option>
      <option>Bar Soaps</option>
      <option>Lotions</option>
      <option>Creams</option>
    </select> !-->
          
       <div class="form-group  col-md-12"> 
         <label for="productname" class="loginFormElement">Nombre del Producto:</label>
         <input class="form-control" name="Producto" id="Producto"  placeholder="Producto" type="text">
       </div>
          
       <div class="form-group col-md-4">
         <label for="productprice" class="loginFormElement">Precio:</label>
         <input class="form-control" name="Precio" id="productprice"  placeholder="0.0" type="number" min="1" step="any">
       </div>

       <div class="form-group col-md-12">
            <label class="loginformelement" name="Descripcion" for="productdescription">Descripcion:</label>
        	  <textarea id="productdescription" name="Descripcion" rows="5"class="form-control input-lg" placeholder="Descripcion" type="text"></textarea>
       </div>
 
                        <input id="submit" type="submit" class="btn btn-block btn-login" value="Agregar Producto">

  
    </form>   



<form method="POST" id="my-dropzone" class="dropzone" action="{{ Route('SaveImage') }}" enctype="multipart/form-data">    
  @csrf

                  <div class="row">
                    <div class="col-md-12 form-group">
                     <!--   <input id="submit" type="submit" class="btn btn-block btn-login" placeholder="Enter your Password" > -->
                    </div>
                </div>
</form>


<script>
  // myDropzone is the configuration for the element that has an id attribute
  // with the value my-dropzone (or myDropzone)
  Dropzone.options.myDropzone = {
    init: function() {
      this.on("addedfile", function(file) {

        // Create the remove button
        var removeButton = Dropzone.createElement("<button>Remove file</button>");
        

        // Capture the Dropzone instance as closure.
        var _this = this;

        // Listen to the click event
        removeButton.addEventListener("click", function(e) {
          // Make sure the button click doesn't submit the form:
          e.preventDefault();
          e.stopPropagation();

          // Remove the file preview.
          _this.removeFile(file);
          // If you want to the delete the file on the server as well,
          // you can do the AJAX request here.
        });

        // Add the button to the file preview element.
        file.previewElement.appendChild(removeButton);
      });
    }
  };

  Dropzone.options.myDropzone = {
            autoProcessQueue: false,
            uploadMultiple: true,
            maxFilezise: 10,
            maxFiles: 2,
            
            init: function() {
                var submitBtn = document.querySelector("#submit");
                myDropzone = this;
                
                submitBtn.addEventListener("click", function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });
                this.on("addedfile", function(file) {
                    alert("file uploaded");
                });
                
                this.on("complete", function(file) {
                    myDropzone.removeFile(file);
                });
 
                this.on("success", 
                    myDropzone.processQueue.bind(myDropzone)
                );
            }
        };

</script>

</div>
  

        

</div>
</body>
</html>