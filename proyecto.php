1


<HTML>
<HEAD>
<META charset="utf-8">
</HEAD>
<BODY>
<SCRIPT type="text/javaScript">

var texto="Hola Mundo";
alert(texto);


</SCRIPT>
</BODY>
</HTML>



2


<html>
<body>
<h2>JavaScript Variables</h2>

<p>Página que muestra los datos del alumno</p>

<p id="demo"></p>

<script>
var nombre = "Ivette";
var apellido = "Torres";
var direccion = 'La Presa';
var edad = 17;
X
document.getElementById("demo"). innerHTML =
nombre + "<br>" + apellido +"<br>" +direccion + "<br>" + edad;
</script>
</body>
</html>




3



<HTML>
<TITLE>Sumas</TITLE>
<SCRIPT LANGUAGE="JavaScript">
alert(4+4);

</SCRIPT>
</HTML>


4



<HTML>
    <TITLE>Sumas</TITLE>
    <SCRIPT LANGUAGE="JavaScript">
    alert(5+2);
    
</SCRIPT>




5




<HTML>
<HEAD>
<META charset="utf-8">
<TITLE>Sumas</TITLE>
<input type="text"placeholder="Dame el valor" id="Numero1"><br><br>
<input type="text"placeholder="Dame el valor" id="Numero2"><br><br>
<input type="text"placeholder="Dame el valor" id="Numero3"><br><br>
<input type="text"placeholder="Dame el valor" id="Numero4"><br><br>
<input type="button" name="name"value="Presioname" onclick="Sumas();">
</HEAD>
<BODY>
<SCRIPT type="text/javaScript">
function Sumas()
{
var Valor1=parseInt(document.getElementByld('Numero1').value);
var Valor2=parseInt(document.getElementByld('Numero2').value);
var Valor3=parselnt(document.getElementByld('Numero3').value);
var Valor4=parselnt(document.getElementByld('Numero4').value);
var Resultado;
Resultado=Valor1+Valor2+Valor3+Valor4;
alert("El valor de la suma es:"+Resultado);
}
</SCRIPT>
</BODY>
</HTML>
