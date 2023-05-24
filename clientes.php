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
                                     <!-- NEW UNIDAD SEVEN -->

    <section id="contenido">
    <h2>Clientes - Unidad VII</h2>

 <!--           <div id="formulario">
                <h2 class="formulario">Formulario</h2>         -->
   <form action method= "POST" class="form">
    <fieldset>
     <legend>Datos del usuario</legend>
      <label for="Name">Nombre:</label>
       <input type="text" id="Name" name="Name" required>
<br>
         <label for="Email">Email:</label>
          <input type="email" id="email" name="email" required>
<br>
            <label for="pass">Contraseña:</label>
             <input type="password" id="pass" name="pass" required>
<br>
               <label for="birthday">Fecha de Nacimiento:</label>
                <input type="date" id="birthday" name="birthday" required>
<br>
                  <textarea readonly cols="2" rows="1">Verifique bien sus datos!</textarea>
                   <input class="pointer" type="submit" name="submit">
         	 	    <input class="pointer" type="reset" value="Borrar"> 
     </fieldset>
      </form>
        

                                          <!-- END -->
    </section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>