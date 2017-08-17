<html>
<head>
</head>
<body>
  <form id="formulario1" onsubmit="return false">
    <input type="number" id="numero1" name="numero1" value="0">
    <p id="resultado"> </p>
    <button id="idboton" >resultado</button>
  </form>

</body>
<noscript>tu navegador no soporta JS. <noscript>
<script>
var formulario=document.getElementById("formulario1");
document.getElementById("idboton").addEventListener("click", function(){
  var numero = document.getElementById("numero1").value;
  var cubo(numero*numero*numero);
  document.getElementById("resultado").innerHTML = cubo;
});
</script>
</html>
