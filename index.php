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
        	<h1>Programador Web con PHP y MySQL<br/>Nivel Intermedio</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Unidad IV - Introducción a PHP</h2>
    
      <!-- Primer DIV -->

    <div id="uni4_1">
    <?php 
        $campeones = 'Solo por la Seleccion Argentina';
        $messi = '<p>Refresco; Volvio la luz; Llovio en el campo; Corre una brisa hermosa</p>';
        $estadio = 'Estadio Mundialista Mario Alberto Kempes';
        
       
       /* ralentizado 
          echo "<h3>$campeones</h3>";
          echo "<p>$messi</p>";
          echo "<p>$estadio</p>"; */
    ?>
        <h3><?php echo $campeones; ?></h3>
        <p><?php echo $messi; ?></p>
        <p><?php echo $estadio; ?></p>  

  </div>
      <!-- Segundo DIV -->

    <div id="uni4_2">
    <?php  
        /* ralentizado
        echo "<p>EVALUACION</p>";
        echo "<p>INTEGRADORA</p>";
        echo "<p>PHP y MySQL</p>";   */

        $uno = 'EVALUACION';
        $dos = 'INTEGRADORA';
        $tres = 'PHP y MySQL';
    ?>
    
       <p><?php echo $uno; ?></p>
       <p><?php echo $dos; ?></p>
       <p><?php echo $tres; ?></p>

    </div>

      <!-- Tercer DIV -->

    <div id="uni4_3">
    <?php 
        
        $dia = 21;
        $mes = 'Marzo';
        $boolean = false;
    
    /* ralentizado    
    echo "<p>$dia</p>";
    echo "<p>$mes</p>";
    echo "<p>$boolean</p>"; */
    ?>
    
    <p><?php echo $dia; ?></p>
    <p><?php echo $mes; ?></p>
    <p><?php echo $boolean; ?></p> 

    </div>

      <!-- Cuarto DIV -->

    <div id="uni4_4">
    <?php 
        
        $impuestos = 10000;
        $alquiler = 45000;
        $expensas = 6000;
    /* ralentizado
    echo "<p>$impuestos</p>";
    echo "<p>$alquiler</p>";
    echo "<p>$expensas</p>";     

       
    echo "$impuestos+$alquiler+$expensas";     
        
    echo "<p>Total Gastos del Mes: ".($impuestos+$alquiler+$expensas)."</p>"; */
    ?>
    
    
    <p><?php echo $impuestos; ?></p>
    <p><?php echo $alquiler; ?></p>
    <p><?php echo $expensas; ?></p>

    <?php
    echo "$impuestos+$alquiler+$expensas";
    ?>


    <p>Total Gastos del Mes: <?php echo ($impuestos+$alquiler+$expensas); ?></p> 

    </div>
    
    </section>

<footer>
<p>Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>