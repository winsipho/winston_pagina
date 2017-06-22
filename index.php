<center>
  <div>
  	<a href="#">Archivo</a>
    <a href="#">Editar</a>
  	<a href="#">Encontrar</a>
    <a href="#">Ayuda</a>
  	</div>

<form method="post" action="registro_manejo.php">
<p>Nombre de usuario <input  required type="text" name="nombre_de_usuario"></p>
<p>Contraseña <input required type="password" name="contraseña"></p>
</p>correo <input required type="text" name="correo"></p>
</p>Telefono <input required type="text" name="telefono" onkeypress="return valida(event)"></p>
  //captar que el usuario presiona una tecla onkeypress="return valida(event)
<script>
function valida(e){
    tecla = (document.all) ? e.keyCode : e.which;

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
