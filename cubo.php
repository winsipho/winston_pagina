<html>
<head>
</head>
<body>
  <form id="form1" onsubmit="return false">
    <input type="number" id="numero1" name="numero1" value="0">
    <p id="resultado"> </p>
    <button id="idbutton" >resultado</button>
  </form>

</body>
<noscript>tu navegador no soporta JS. <noscript>
<script>
var formulario=document.getElementById("form1");
document.getElementById("idboton").addEventListener("click", function(){
  var numero = document.getElementById("numero1").value;
  var cubo(numer*numero*numero);
  document.getElementById("resultado").innerHTML = cubo;
});
</script>
</html>
