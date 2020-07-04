<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de encuesta</title>
    <link rel="stylesheet" href="diseño_paginaestudiante.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>


    <div class="contenedor">

        <header>

            <!-- Aqui van las imagenes de arriba-->
            <div class="imagenesHorizontales">

                <div class="contenedorImagen"> <img src="Imagenes/logoUtp.png" alt=""></div>
                <div class="contenedorImagen"> <img src="Imagenes/img1.jpg" alt=""></div>
                <div class="contenedorImagen"> <img src="Imagenes/img2.jpg" alt=""></div>
                <div class="contenedorImagen"> <img src="Imagenes/img3.jpg" alt=""></div>
                <div class="contenedorImagen"> <img src="Imagenes/img4.jpg" alt=""></div>
                <div class="contenedorImagen"> <img src="Imagenes/img5.jpg" alt=""></div>
                <div class="contenedorImagen"> <img src="Imagenes/logoFisc.png" alt=""></div>

            </div>

        </header>

        




        <!-- Lado izq. de la pagina, tiene una imagen vertical -->
        <aside>

            <div class="contenedor_imagen_vertical">

                <img src="https://www.utp.ac.pa/sites/default/files/fisc-aniversario-2017.jpg" alt="" class="img_vertical">
                <br>

                <span class="txt_imagenVertical">Este sitio es mantenido por la Universidad Tecnológica de Panamá</span>
                <br>
                <a href="">Política de privacidad</a>

            </div>

        </aside>



        <!---------------------------------------------------------------------------------------------------------------->
        <!-- AQUI VA CONTENIDO DE LA PAGINA-->
        <div class="contenido">
        <h1 class="tit1">Ingresa los datos del Egresado</h1>
            
            <div class="row">
            <form action="" method="get">
          <p>Nombre: <input type="text" name="nombre" size="30" required></p>
          <p>Apellido: <input type="text" name="apellido" size="30" required></p>
          <p>Cédula: <input type="text" name="cedula" size="30" required></p>
          <p>Contraseña: <input type="text" name="contraseña" size="30" required></p>
          <p>Correo: <input type="text" name="correo" size="30" required></p>
          <p>Telefono: <input type="text" name="telefono" size="30" required></p>
          <label for="cars">SEDE :</label>
  <select id="SEDE" name="Sede">
    <option value="volvo">Panama</option>
    <option value="saab">Cocle</option>
    <option value="fiat">Colon</option>
    <option value="audi">Veraguas</option>
  </select>
  
    
  </select>
           </form>
                
    </div>
         </div>
       

         <div class="botonvolver3">
                    <a href="#" class="btn btn-success">Volver</a>
                </div>
                <div class="botonaceptar1">
                    <a href="#" class="btn btn-success">Aceptar</a>
                </div>

                <!---------------------------------------------------------------------------------------------------------------->
               
                





</body>

</html>