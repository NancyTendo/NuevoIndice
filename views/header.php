<!DOCTYPE html>
<html lang="en">
<head>
<style>
        span.note{
           font-size: 120%; 
           color: #F1042C;
        }
    </style>  
    <style type="text/css">
#imagen {
               background-image: url(file:///C:\Users\HP\Documents/imagen.jpg);
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title></title>
    <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/default.css">
   
</head>
<body>
    
    
<div id="header">  
     <h1>SuperM <span class="note">.com</span>
        <input type="search" id="miBusqueda" name="busqueda" style="font.size:50%" placeholder="Buscar Producto"><button> </button>
        </h1> 
        <h4><a >Iniciar Sesión</a>/<a>Regístrate</a> </h4>    

    </div>
   
    <div id="nav">
        <ul>

            <li><a href="<?php echo constant('URL'); ?>main">Inicio</a></li>
            <li><a href="<?php echo constant('URL'); ?>nuevo">Productos</a></li>
            <li><a href="<?php echo constant('URL'); ?>consulta">Informacion</a></li>
            <li><a href="<?php echo constant('URL'); ?>ayuda">Ayuda</a></li>
        </ul>
    </div>
    <img src="file:///Z:/imagen.jpg" alt="prueba" />
    <div id="imagen" onClick="this.style.backgroundImage='url(file:///C:\Users\HP\Documents/imagen.jpg)'"></div>
    
    <img src="C:\Users\HP\Documents/imagen.jpg" alt="prueba" style="width:100px;height:200px; border:0;" >
   
</body>
</html>