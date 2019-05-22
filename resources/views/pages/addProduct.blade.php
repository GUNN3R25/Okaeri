<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="/js/dropzone.js"></script>
<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />


@include('includes.stye')

</head>
<body>
@include('includes.header')


<div id="wrapper">

@include('includes.sidebar')






<div class="container">
  
<div class="row">
    <div class="col-md-6">
    <h1>Agregar Producto</h1>
    </div>
</div>
  
<br>
  
<div class="row">
  
<div class="col-md-12">

  <form role="form" ">
    @csrf
    <!--  method="POST" action="{{ Route('NuevoProducto') }}
    <select class="form-control" id="productSelect"><option>Please Select a Product Group</option>
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
            <label class="loginformelement" name="" for="productdescription">Descripcion:</label>
        	  <textarea id="productdescription" name="Descripcion" rows="7"class="form-control input-lg" placeholder="Descripcion" type="text"></textarea>
       </div>
 

  
    </form>   
</div>




<div class="col-md-4">
           <label for="productname" class="loginFormElement">Image Principal:</label>

<form method="POST" id="my-dropzone" class="dropzone" action="{{ Route('SaveImage') }}" enctype="multipart/form-data">    
  @csrf
           <input class="form-control"  name="idUsuario" id="Image_principal_id_user" type="text" style="display:none;">
                        <input class="form-control" name="type" value="1" type="text" style="display:none;">

</form>

</div>

<div class="col-md-4">
           <label for="productname" class="loginFormElement">Galeria:</label>

<form method="POST" id="my-dropzone2" class="dropzone" action="{{ Route('SaveImage') }}" enctype="multipart/form-data">    
  @csrf
             <input class="form-control" name="idUsuario" id="Galeria_id_user" type="text" style="display:none;">
             <input class="form-control" name="type" value="2" type="text" style="display:none;">
</form>

</div>

<br>
<br>
<br>
<div class="col-md-12">

                <button id="submit" class="btn btn-success btn-submit">Submit</button>

</div>
</body>
</html>



<script type="text/javascript">
 
  // myDropzone is the configuration for the element that has an id attribute
  // with the value my-dropzone (or myDropzone)
var dropzone_gallery;

  Dropzone.options.myDropzone2 = {
            autoProcessQueue: false,
            uploadMultiple: true,
            maxFilezise: 10,
            maxFiles: 10,
            
            init: function() {
                var submitBtn = document.querySelector("#submit");
                myDropzone = this;
                dropzone_gallery = this;

                submitBtn.addEventListener("click", function(e){
                    e.preventDefault();
                    e.stopPropagation();      
                   // myDropzone.processQueue();
                });
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
                
                this.on("complete", function(file) {
                    myDropzone.removeFile(file);
                });
 
                this.on("success", 
                    myDropzone.processQueue.bind(myDropzone)
                );
            }
        };

var dropzone_principal;

  Dropzone.options.myDropzone = {
            autoProcessQueue: false,
            uploadMultiple: true,
            maxFilezise: 10,
            maxFiles: 1,
            
            init: function() {
                var submitBtn = document.querySelector("#submit");
                myDropzone = this;
                dropzone_principal = this;

                submitBtn.addEventListener("click", function(e){
                    e.preventDefault();
                    e.stopPropagation();      
                   // myDropzone.processQueue();
                });
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
                
                this.on("complete", function(file) {
                    myDropzone.removeFile(file);
                });
 
                this.on("success", 
                    myDropzone.processQueue.bind(myDropzone)

                );
            }
        };

    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });



    $(".btn-submit").click(function(e){

        e.preventDefault();

        var idUsuario = {{auth()->user()->id}};

        var name = $("input[name=Producto]").val();

        var password = $("input[name=Precio]").val();

        var email = $("textarea[name=Descripcion]").val();



        $.ajax({

           type:'POST',

           url:'{{ Route('NuevoProducto') }}',

           data:{idUsuario:idUsuario, Producto:name, Precio:password, Descripcion:email},

           success:function(data){

              //alert(data);
              console.log(data);
              $("#Image_principal_id_user").val(data);
              $("#Galeria_id_user").val(data);
              dropzone_gallery.processQueue();
              dropzone_principal.processQueue();

              //AGREGAR PRODUCTOS finalizado

              //MOSTRAR PRODCUTOA AGREGADO
           }

        });



  });

</script>