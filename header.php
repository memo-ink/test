
<html>
<head>
  <title>MENU</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<style>
/* Menú movil */
  .container {
    display: inline-block;
    cursor: pointer;
  }
  .bar1, .bar2, .bar3 {
    width: 22px;
    height: 3px;
    background-color: #FFF;
    margin: 3px 0;
    transition: 0.4s;
  }
  .change .bar1 {
    -webkit-transform: rotate(-45deg) translate(-4px, 3px);
    transform: rotate(-45deg) translate(-4px, 3px);
  }
  .change .bar2 {
    opacity: 0;
  }
  .change .bar3 {
    -webkit-transform: rotate(45deg) translate(-5px, -5px);
    transform: rotate(45deg) translate(-5px, -5px);
  }
  .btnMovil {
    font-size: 16px;
    font-family: g-medium;
    color: #FFF;
    margin-bottom: 10px;
    cursor: pointer;
  }
  /* Menú móvil */
  #menuMovil {
    display: block;
  }
</style>
</head>
<body>
<header>
  <!--img class="logo-head" src="img/logo-head.svg" id="logo-ss"/-->
  <span>Logo</span>
  <div id="menu-sliders">
    <div class="menu-contender">
      <ul class="menu-nav" id="menu-slide">
        <li class="bold-font" id="bSomos">SOMOS</li>
        <li id="bProducto">PRODUCTOS</li>
        <li id="bReceta">RECETAS</li>
        <li id="bContacto">CONTACTO</li>
        <div id="linea-menu"></div>
        <div class="lineac-menu"></div>
      </ul>
    </div>
  </div>
</header>
<div style="width:100%; position:fixed; top:0; background-color:#174a67; height:60px; z-index:100;" id="menuMovil">
	<div style="background-color:#174a67; width:90%; padding:10px 0; margin:0 auto">
    	<div class="noventa" style="font-size:0">
        	<a href="#" style="float:left">Logo<!--img src="img/logo-head.svg" alt="NOVA" height="35" id="btnHomeMovil"/--></a>

            <div style="width:30px; padding-left:7px; height:29px; padding-top:8px; float:right;">
            	<div class="container" onclick="myFunction(this)" id="container">
                  <div class="bar1"></div>
                  <div class="bar2"></div>
                  <div class="bar3"></div>
            	</div>
            </div>
            <div style="clear:both"></div>

        </div>
    </div>

    <div style="text-align:center; height:0; overflow:hidden; background-color:#174a67; display:none" id="contenidoMenuMovil">
    	<div class="noventa">
        <br /><br /><br />
    	  <div id="btnSomosMovil" class="btnMovil">Somos</div><br />
        <div id="btnProductosMovil" class="btnMovil">Productos</div><br />
        <div id="btnRecetasMovil" class="btnMovil">Recetas</div><br />
        <div id="btnContactoMovil" class="btnMovil">Contacto</div>
        <div class="btnMovil" style="margin-top:100px">
          <!--img class="frescura" src="img/frescura.svg" /-->
        </div>
      </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
function myFunction(x) {
    x.classList.toggle("change");
    if(document.getElementById("contenidoMenuMovil").style.display == "none")
    {
        document.getElementById("contenidoMenuMovil").style.display = "";
        $("#menuMovil").animate({
            height: '100%'
        }, "slow");
        $("#contenidoMenuMovil").animate({
            height: '100%'
        }, "slow");
    }
    else{
        $("#contenidoMenuMovil").animate({
            height: '0'
        }, "slow", function(){ document.getElementById("contenidoMenuMovil").style.display = "none"; });
        $("#menuMovil").animate({
            height: '60px'
        }, "slow");
    }
  }

  $('#btnSomosMovil').click(function() {
      $('html, body').animate({scrollTop: ($('#lechuga').offset().top - 100) }, 'slow', function(){
        $("#contenidoMenuMovil").animate({
          height: '0'
        }, "slow", function(){ document.getElementById("contenidoMenuMovil").style.display = "none"; });
        $("#menuMovil").animate({
          height: '60px'
        }, "slow");
        $('#container').removeClass("change");
      });
    });
</script>
</body>
</html>
