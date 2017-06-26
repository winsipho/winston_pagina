<html>
<head>
  <!--  <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"> -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="calculadora.css">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <meta name="author" content="Winston Ramses Tenatic Bautista Bañuelos">
  <meta name="theme-color" content="#00FF7F">
  <title>Calculadora</title>
</head>
<body>
  <div class="row">
    <div class="offset-md-3 col-md-6  col-sm-12">
      <form class="cuerpo" name="calculadora">
          <div class="row cajaCuerpo">
            <div class="col-md-1 col-sm-1 col-xs-1">
              <center>
                <i class="fa fa-calculator  fa-2x" aria-hidden="true"></i>
              </center>
            </div>
            <div class="col-md-10  col-sm-8  col-xs-10">
              <input  id="valor" class="form-control caja" >
            </div>
          </div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <input type="button" class="boton" value="1" onclick="calculadora.valor.value +='1'">
            <input type="button" class="boton" value="2" onclick="calculadora.valor.value +='2'">
            <input type="button" class="boton" value="3" onclick="calculadora.valor.value +='3'">
            <input type="button" class="boton" value="+" onclick="calculadora.valor.value +='+'">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <input type="button" class="boton" value="4" onclick="calculadora.valor.value +='4'">
            <input type="button" class="boton" value="5" onclick="calculadora.valor.value +='5'">
            <input type="button" class="boton" value="6" onclick="calculadora.valor.value +='6'">
            <input type="button" class="boton" value="-" onclick="calculadora.valor.value +='-'">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <input type="button" class="boton" value="7" onclick="calculadora.valor.value +='7'">
            <input type="button" class="boton" value="8" onclick="calculadora.valor.value +='8'">
            <input type="button" class="boton" value="9" onclick="calculadora.valor.value +='9'">
            <input type="button" class="boton" value="*" onclick="calculadora.valor.value +='*'">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <input type="button" class="boton" value="C" onclick="calculadora.valor.value=''">
            <input type="button" class="boton" value="0" onclick="calculadora.valor.value +='0'">
            <input type="button" class="boton" value="/" onclick="calculadora.valor.value +='/'">
            <input type="button" class="boton" value="=" onclick="resultado()">
          </div>
        </div>
        <br>
      </form>
    </div>
  </div>
  <script>
  function resultado () {
    var input= document.getElementById('valor')
    var valor= input.value;
    if(input.value.length== 0){
      input.value=0;
    }
    else {
      input.value=eval(valor);
    }
  }
  </script>
  <!--
  <script src="../../js/jquery-3.1.1.slim.min.js" ></script>
  <script src="../../js/tether.min.js" ></script>
  <script src="../../js/bootstrap.js" ></script>
-->
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
