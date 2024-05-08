<HTML>
<HEAD>
<TITLE>JavaScript Index</TITLE>
<script Language="JavaScript">
function goback((
alert('Good Byel"):
history.go(-1);
function gettheDate0 f
Todays = new Date(;
TheDate =""+ (Todays.getMonthO+
1)+" / "+ Todays.getDate()+"/"+
(Todays.getYear() +1900)
document.clock.thedate.value =
TheDate;
var timerlD = null;
var timerRunning= false;
function stopclock (f
if(timerRunning)
clearTimeout(timerID):
timerRunning= false;
function startclock 0 (
stopclock();
gettheDate()
showtime():
function showtime 0
var now = new Date();
varhours = now.getHours();
var minutes= now.getMinutes():
var seconds = now.getSeconds(
var timeValue= +((hours >12)
hours -12 :hours)
timeValue += (minutes < 10) ?
:0": ":") + minutes
timeValue+= ((seconds <10)?
:0 : S + seconds
timeValue += (hours >= 12) ? "
P.M."
A.M."
document.clock.face.value
timeValue;
timerlD=
setTimeout("showtime()",1000);
timerRunning=true;
</script>
</HEAD>
<BODY bgcolor="#00FFFF"
onLoad="startclock()">
<CENTER>
<h2>Esto es un reloj hecho con
JavaScript</h2>
<table border>
<tr
<td><form name="clock"
onSubmit=*0"></td>
</tr>
<tr>
<td colspan=2>Hoy es: <input
type="text" name="thedate" size=12
value=""></td>
<td colspan=2>La hora es: <input
type="text" name="face" size=12
value=""></td></form>
<ftr>
</table>
</CENTER>
<hr>
<center>
<h3>
[<a href='javascr.htm">Volver</a>]
</h3>
</center>
</BODY>
</HTML>


























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
