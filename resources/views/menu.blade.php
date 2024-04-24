<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title></title>

  <style>

  /* Estilos generales */

  html, body {

    height: 100%;

    margin: 0;

    padding: 0;

  }



  body {

    display: flex;

    flex-direction: column;

    align-items: center; /* Centra verticalmente */

    justify-content: space-between; /* Espacio entre el encabezado y el pie de página */

    position: relative; /* Establece un contexto de posición para los elementos absolutos */

    min-height: 100vh; /* Garantiza que el cuerpo al menos ocupe toda la altura de la ventana */

  }



  /* Estilos para el header */

  header {

    background-color: blue; /* Mostaza oscuro */

    color: #fff;

    text-align: right;

    padding: 50px;

    width: 100%; /* Ocupa todo el ancho */

    position: fixed; /* Mantiene fijo el encabezado */

    top: 0; /* Fijado arriba */

  }



  header nav {

    margin-top: 5px;
    
    text-align: center;

  }



  header a {

    color: #fff;

    text-decoration: none;

    margin-right: 10px;

  }



  /* Estilos para el contenido */

  main {

    text-align: center;

    padding: 20px;

    margin-top: 150px; /* Ajusta el margen superior para evitar que el contenido se superponga con el encabezado */

  }



  /* Estilos para el pie de página */

  footer {

    background-color: #6b5b3e; /* Mostaza oscuro */

    color: #fff;

    text-align: center;

    padding: 50px;

    width: 100%; /* Ocupa todo el ancho */

    position: absolute; /* Permite que el pie de página permanezca abajo */

    bottom: 0; /* Fijado abajo */

  }



  footer nav {

    margin-top: 5px;

  }



  footer a {

    color: #fff;

    text-decoration: none;

    margin-right: 10px;

  }



  /* Estilos para los títulos */

  h1 {

    color: green; /* Fucsia */

  }



  /* Estilos para las tarjetas */

  .card-container {

    display: flex;

    flex-direction: row; /* Cambia a disposición horizontal */

    align-items: center;

    gap: 20px;

    overflow-x: auto; /* Permite desplazamiento horizontal si las tarjetas son demasiado anchas */

  }



  .card {

    width: 300px;

    border-radius: 10px;

    overflow: hidden;

    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

  }



  .card img {

    width: 100%;

    height: auto;

  }



  .card-content {

    padding: 20px;

    text-align: center;

  }

</style>



</head>

<body>

  <header>

    <nav>

      <a href="http://127.0.0.1:8000/AMED">ARABE</a>

      <a href="http://127.0.0.1:8000/free">Lamborghini</a>

      <a href="http://127.0.0.1:8000/hola">HALAMADRID</a>

      <a href="http://127.0.0.1:8000/cr7">cr7</a>

      <a href="">Contacto</a>

    </nav>

  </header>



  <main>

    


    <div class="card-container">

      <div class="card">
        <a href="http://127.0.0.1:8000/AMED">
        <img src="https://www.visateam.pt/wp-content/uploads/2018/12/Arabia-Saudita_1500x800-1-1024x546.jpg">
        </a>
        <div class="card-content">

          <h3>ARABE</h3>

          <p>ARABIA SAUDITA</p>

        </div>

      </div>



      <div class="card">

        <a href="http://127.0.0.1:8000/free">
        <img src="https://cdn.motor1.com/images/mgl/8LQ6M/s1/lamborghini-aventador-svj-63-roadster.jpg">
        </a>
        <div class="card-content">

          <h3>lamborghini</h3>

          <p>CENTENARIO.</p>

        </div>
        

      </div>



      <div class="card">
 <a href="http://127.0.0.1:8000/hola">
        <img src="https://images8.alphacoders.com/476/thumb-1920-476725.jpg">
        </a>
        <div class="card-content">

          <h3>cr7</h3>

          <p></p>

        </div>

      </div>

      <div class="card">

      <a href="http://127.0.0.1:8000/cr7">
        <img src="https://wallpapercave.com/wp/wp1942299.jpg">
        </a>
        <div class="card-content">

          <h3>HALAMADRID</h3>

          <p>Hellow madrisdistas.</p>

        </div>
        

      </div>
      <a href="http://127.0.0.1:8000/" class="button">Volver al INICIO</a>
    </div>

  </main>