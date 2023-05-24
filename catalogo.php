<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link rel="stylesheet" href="estilos.css" />
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
  <h2>Catálogo - Unidad V</h2>
  
<nav id="botonera_secundaria">
    <ul>
     
     <li><a class="catalogo" href="catalogo.php?id=Sillón Capri&Producto=Sillón+Capri.<br>+Precio:+$+345.00<br>+Características:+Concebida+para+ser+utilizada+tanto+bajo+techo+como+a+la+intemperie.+La+madera+de+origen+brasilera+está+acabada+con+un+recubrimiento+de+Resina+Polisten+que+la+embellece.#contenido">Sillón Capri</a></li>
     <li><a class="catalogo" href="catalogo.php?id=Mesa Ipanema&Producto=Banco+Venecia.<br>+Precio:+$+500.00<br>+Características:+Se+trata+de+una+colección+de+muebles+de+madera+de+eucaliptos,+certificada+con+el+sello+FSC+y+concebida+para+ser+utilizada+tanto+bajo+techo+como+a+la+intemperie.+La+madera+es+de+origen+brasilera.+Las+medidas+son:+120+cms.#contenido">Mesa Ipanema</a></li>
     <li><a class="catalogo" href="catalogo.php?id=Banco Venecia&Producto=Banco+Venecia.<br>+Precio:+$+450.00<br>+Características:+Se+trata+de+una+colección+de+muebles+de+madera+de+eucaliptos,+certificada+con+el+sello+FSC+(SWCOC-091)+y+concebida+para+ser+utilizada+tanto+bajo+techado+como+a+la+intemperie.+La+madera+es+de+origen+brasilera.+Las+medidas+son:+120+cms.#contenido">Banco Venecia</a></li>
          
    </ul> 
</nav> 
<?php
  if (isset($_GET['id'])) {
    
      

    switch ($_GET['id']) {
      case 'Sillón Capri':
        $titulo = 'Sillón Capri';
        $info = 'Producto: Sillón Capri.<br>'.'Precio: $ 345.00<br>'.'Características: Concebida para ser utilizada tanto bajo techo como a la intemperie. La madera de origen brasilera está acabada con un recubrimiento de Resina Polisten que la embellece.';
        $img = 'sillon1.jpg';
        break;
      case 'Mesa Ipanema':
         $titulo = 'Mesa Ipanema';
         $info = 'Producto: Mesa Ipanema.<br>'.'Precio: $ 500.00<br>'.'Características: Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC y concebida para ser utilizada tanto bajo techo como a la intemperie'.'La madera es de origen brasilera'.'Las medidas son: 120 cms.';
         $img = 'ipanema.jpg';
        break;
      case 'Banco Venecia':
         $titulo = 'Banco Venecia';
         $info = 'Producto: Banco Venecia.<br>'.'Precio: $ 450.00<br>'.'Características: Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC (SWCOC-091) y concebida para ser utilizada tanto bajo techado como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms.';        
         $img = 'venecia.jpg';
        break; 
    }

?>

<div id="datos">
  <img src="imagenes/<?php echo $img; ?>" class="foto" title="<?php echo $titulo; ?>"
   alt="<?php echo $titulo; ?>">
  <h2 id="titulo"><?php echo $titulo; ?></h2>
  <p class="info"><?php echo $info; ?></p> 

</div>
<?php }  else { ?>
 <img src="imagenes/fondo_madera.jpg" class="madera" title="materia prima" alt="madera">
  <?php   }   ?>

</section>

  <footer>
    <p>Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></p>
</footer>
  </section>
    </body>
      </html>