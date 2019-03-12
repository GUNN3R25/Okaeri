<!doctype html>
<html>
    <head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

        <title>Laravel</title>

        <!-- Fonts -->

        <!-- Styles -->
        <style>
/*********************************************
    			Call Bootstrap
*********************************************/

@import url("bootstrap/bootstrap.min.css");
@import url("bootstrap-override.css");
@import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");

/*********************************************
        		Theme Elements
*********************************************/

.gold{
	color: #FFBF00;
}

/*********************************************
					PRODUCTS
*********************************************/

.product{
	border: 1px solid #dddddd;
	height: 321px;
}

.product>img{
	max-width: 230px;
}

.product-rating{
	font-size: 20px;
	margin-bottom: 25px;
}

.product-title{
	font-size: 20px;
}

.product-desc{
	font-size: 14px;
}

.product-price{
	font-size: 22px;
}

.product-stock{
	color: #74DF00;
	font-size: 20px;
	margin-top: 10px;
}

.product-info{
		margin-top: 50px;
}

/*********************************************
					VIEW
*********************************************/

.content-wrapper {
	max-width: 1140px;
	background: #fff;
	margin: 0 auto;
	margin-top: 25px;
	margin-bottom: 10px;
	border: 0px;
	border-radius: 0px;
}

.container-fluid{
	max-width: 1140px;
	margin: 0 auto;
}

.view-wrapper {
	float: right;
	max-width: 70%;
	margin-top: 25px;
}

.container {
	padding-left: 0px;
	padding-right: 0px;
	max-width: 100%;
}

/*********************************************
				ITEM 
*********************************************/

.service1-items {
	padding: 0px 0 0px 0;
	float: left;
	position: relative;
	overflow: hidden;
	max-width: 100%;
	height: 321px;
	width: 130px;
}

.service1-item {
	height: 107px;
	width: 120px;
	display: block;
	float: left;
	position: relative;
	padding-right: 20px;
	border-right: 1px solid #DDD;
	border-top: 1px solid #DDD;
	border-bottom: 1px solid #DDD;
}

.service1-item > img {
	max-height: 110px;
	max-width: 110px;
	opacity: 0.6;
	transition: all .2s ease-in;
	-o-transition: all .2s ease-in;
	-moz-transition: all .2s ease-in;
	-webkit-transition: all .2s ease-in;
}

.service1-item > img:hover {
	cursor: pointer;
	opacity: 1;
}

.service-image-left {
	padding-right: 50px;
}

.service-image-right {
	padding-left: 50px;
}

.service-image-left > center > img,.service-image-right > center > img{
	max-height: 155px;
}


        </style>

        
@include('includes.stye')
    </head>
    <body>
    @include('includes.header')

    <div id="wrapper">

@include('includes.sidebar')



            <div class="container">


            <div class="container-fluid">
        <div class="content-wrapper">	
            <div class="item-container">	
                <div class="container">	
                    <div class="col-md-12">
                        <div class="product col-md-3 service-image-left">
                        
                            <center>
                                <img id="item-display" src="https://unsplash.it/500/300?image=0" alt=""></img>
                            </center>
                        </div>
                        
                        <div class="container service1-items col-sm-2 col-md-2 pull-left">
                            <center>
                                <a id="item-1" class="service1-item">
                                    <img src="https://unsplash.it/500/300?image=0" alt=""></img>
                                </a>
                                <a id="item-2" class="service1-item">
                                    <img src="https://unsplash.it/500/300?image=0" alt=""></img>
                                </a>
                                <a id="item-3" class="service1-item">
                                    <img src="https://unsplash.it/500/300?image=0" alt=""></img>
                                </a>
                            </center>
                        </div>
                    </div>
                        
                    <div class="col-md-7">
                        <div class="product-title">Lenovo V130 Portátil 14" (HD 1366x768 Pixeles, Intel Celeron N4000 1.10 GHz, 4GB RAM, 500GB, Windows 10 Home), Gris
</div>
                            <div class="product-desc">Almacenamiento de 500GB HDD a 5400rpm y memoria RAM de 4GB DDR4.</div>
                        <div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
                        <hr>
                        <div class="product-price">$ 1234.00</div>
                        <div class="product-stock">In Stock</div>
                        <hr>
                        <div class="btn-group cart">
                            <button type="button" class="btn btn-success">
                                Add to cart 
                            </button>
                        </div>
                        <div class="btn-group wishlist">
                            <button type="button" class="btn btn-danger">
                                Add to wishlist 
                            </button>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="container-fluid">		
                <div class="col-md-12 product-info">
                        <ul id="myTab" class="nav nav-tabs nav_tabs">
                            
                            <li class="active"><a href="#service-one" data-toggle="tab">DESCRIPTION</a></li>
                            <li><a href="#service-two" data-toggle="tab">PRODUCT INFO</a></li>
                            <li><a href="#service-three" data-toggle="tab">REVIEWS</a></li>
                            
                        </ul>
                    <div id="myTabContent" class="tab-content">
                            <div class="tab-pane fade in active" id="service-one">
                            
                                <section class="container product-info">
                                    The Corsair Gaming Series GS600 power supply is the ideal price-performance solution for building or upgrading a Gaming PC. A single +12V rail provides up to 48A of reliable, continuous power for multi-core gaming PCs with multiple graphics cards. The ultra-quiet, dual ball-bearing fan automatically adjusts its speed according to temperature, so it will never intrude on your music and games. Blue LEDs bathe the transparent fan blades in a cool glow. Not feeling blue? You can turn off the lighting with the press of a button.

                                    <h3>Corsair Gaming Series GS600 Features:</h3>
                                    Almacenamiento de 500GB HDD a 5400rpm y memoria RAM de 4GB DDR4.
Gráfico: Intel UHD Graphics 600. Teclado de 6 filas, resistente a salpicaduras, teclas FN multimedia (Distribución latinoamericano)
Procesador Intel Celeron N4000 con 4MB de caché y hasta 2.60GHz de velocidad de procesamiento (1.10 GHz de frecuencia base).
Pantalla 14" HD (1366x768), TN, LED backlight, antirreflejos, 16:9, 220 nits que te permite disfrutar tus fotos, videos y contenidos web con todo detalle.
Sistema operativo Windows 10 de 64 Bits en Español
                                </section>
                                            
                            </div>
                        <div class="tab-pane fade" id="service-two">
                            
                            <section class="container">
                                    
                            </section>
                            
                        </div>
                        <div class="tab-pane fade" id="service-three">
                                                    
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
     
     
        

        </div>
        <!-- /#page-content-wrapper -->

 

</div>
    
    </body>
</html>
