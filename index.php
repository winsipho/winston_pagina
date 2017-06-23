

<html>

<head>
<!--taañño en movil linea 7-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--color en movil bordes -->
  <meta name="theme-color" content="#B60060">
  <meta name="msapplication-navbutton-color" content="#B60060">
<link rel="stylesheet" type="text/css" href="estilo_principal.css">
</head>
<body>
  <header>
    <nav>
      <ul>
        <li class="menu-item"><a href="#"> Archivo </a>
          <ul class="submenu">
            <li> <a href="#"> Nuevo </a> </li>
            <li> <a href="#"> Guardar </a> </li>
            <li> <a href="#"> Abrir </a> </li>
          </ul>
        </li>
        <li class="menu-item"><a href="#"> Editar </a>
          <ul class="submenu">
            <li> <a href="#"> Copiar </a> </li>
            <li> <a href="#"> Cortar </a> </li>
            <li> <a href="#"> Pegar </a> </li>
          </ul>
        </li>
        <li class="menu-item"><a href="#"> Encontrar </a>
          <ul class="submenu">
            <li> <a href="#"> Buscar </a> </li>
            <li> <a href="#"> Remplazar </a> </li>
          </ul>
        </li>
        <li class="menu-item"><a href="#"> Ayuda </a>
          <ul class="submenu">
            <li> <a href="#"> Ayuda </a> </li>
            <li> <a href="#"> Acerca de </a> </li>
          </ul>
        </li>
      </ul>
      </nav>

  </header>
  <div id="estilo_principal">
<style type="text/css">

</style>




  <center>
  <form method="post" action="registro_manejo.php">
  <p>Usuario <input  required type="text" name="nombre_de_usuario"></p>
  <p>Contraseña <input required type="password" name="contraseña"></p>
  </p>correo <input required type="text" name="correo"></p>
  </p>Telefono <input required type="text" name="telefono" onkeypress="return valida(event)"></p>

  <script>
  function valida(e){
      tecla = (document.all) ? e.keyCode : e.which;
      //captar que el usuario presiona una tecla onkeypress="return valida(event) linea 89
      //Tecla de retroceso para borrar, siempre la permite
      if (tecla==8){
          return true;
      }

      // Patron de entrada, en este caso solo acepta numeros
      patron =/[0-9]/;
      tecla_final = String.fromCharCode(tecla);
      return patron.test(tecla_final);
  }
  </script>
  </p>Nacionalidad <input required type="text" name="nacionalidad"></p>
  <input type="submit" value="enviar">
  </form>
  </center>
</div>
</body>
</html>
