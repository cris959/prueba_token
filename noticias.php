<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
</head>

<body>
<section id="contenedor">
	<header>
    	<nav id="botonera_principal">
        	<ul>
            	<li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="noticias.php">Noticias</a></li><li><a href="clientes.php">Clientes</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
   
   
<section id="contenido">
  <h2>Noticias - Unidad VI</h2>

                                <!-- NEW UNIDAD VI  -->

<article class="actualidad">
  <h1 class="encabezado">NOTICIAS</h1>

<?php

$noticia = array(
    array('titulo'=>'MODA<br>', 'parrafo' => 'A sus 106 años, esta Filipina llega a la portada de Vogue y logra una marca.', 'imagen' => 'one.png'),
    array('titulo'=> 'Donald Trump podría presentarse a las elecciones a pesar de haber sido imputado', 'parrafo' => 'Julien Tourreille, investigador de la Universidad de Quebec, explica que no hay nada en la Constitución que se lo impida.', 'imagen' => 'two.png'),
    array('titulo' => 'Hip Hop<br>
    Wu-Tang Clan con los Golden Boyz y con Neo Pistea como teloneros, en el estadio Luna Park.', 'parrafo' => 'Por primera vez en Argentina y con 30 años de carrera, el colectivo de MC´s de Staten Island y referente absoluto de la escena del hip hop. Foto Martín Bonetto', 'imagen' => 'three.png'),
    array('titulo' => 'Prisión perpetua para los dos policías acusados de disparar y matar a Blas Correas.', 'parrafo' => 'Un jurado popular condenó a prisión perpetua a los policías acusados de matar y encubrir el asesinato de Valentino Blas Correas, ocurrido en Agosto de 2020 durante un control vehícular cuando se movilizaba con cuatro amigos en la ciudad de Córdoba.', 'imagen' => 'four.png')   
);
    
for ($i=0; $i < count($noticia); $i++) { 
   
?>
        <h3 class="popu"><?php echo $noticia[$i]['titulo']; ?></h3>
            <p class="cuarteto"><?php echo $noticia[$i]['parrafo']; ?></p>               
               <img class="noty" src="imagenes/<?php echo $noticia[$i]['imagen']; ?>">                

<?php        }        ?>   
</article>
 </section>

<footer>
  <p>Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></p>
</footer>
 </section>
   </body>
     </html>