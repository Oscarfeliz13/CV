
<html>
<head>
  <title>
   
 
  </title>
  <style>
  
 legend{
	    border: solid 1px;
		padding: 5px;
		font-weight: bold;
		border-radius:20px;
		background:#bbd2c5;

 }
       
  body{
        background-color: bluegrenn;
}
   
   
</style>
     </head>
   <body>
   <div>
    <fieldset>
   
   <div= id="Principal">
   <img src="1.jpg" align="left" width="120" id="foto"/>
   <td>
    <legend>DATOS GENERALES</legend>
	<tr>
	<hr>
	
	<?php

        $datos=array("Nombre:"=>"Oscar Amable","Apellido:"=>"Feliz De La Cruz","Cedula:"=>"402-2030000-0",
        "Direccion:"=>"San isidro No.7, Pradera Tropical");
    foreach ($datos as $clave=>$valor){
	echo  "$clave  $valor <br>";
	echo "<pre>";
	echo "<hr>";
	}
	if(empty($datos)) {
//Está vació
} else {
foreach ($datos as $clave=>$valor){
}
}
	?>
		 </fieldset>
	
<fieldset>
	<legend>EXPERIENCIA LABORAL</legend>
	<tr>
	<hr>
	
	<?php  
	$Experiencia=array("Banco De Reservas:"=>"Soporte IT (12/05/2010).","Claro:"=>"Soporte Helpdesk (12/06/2016).","Altice:"=>"Helpdesk (12/06/2018).");
foreach ($Experiencia as $clave=>$valor){
	echo  "$clave  $valor <br>";
	echo "<pre>";
	echo "<hr>";
}
	if(empty($Experiencia)) {
//Está vació
} else {
foreach ($Experiencia as $clave=>$valor){
}
}
	?>
	
</fieldset>

<fieldset>
	<legend>ESTUDIOS ACADEMICOS</legend>
	<tr>
	<hr>
	
	<?php  
	$datos=array("Universidad:"=>"Uasd, O&M.","Colegio:"=>"San Miguel.",);
foreach ($datos as $clave=>$valor){
	echo  "$clave  $valor <br>";
	echo "<pre>";
	echo "<hr>";
}
	if(empty($datos)) {
//Está vació
} else {
foreach ($datos as $clave=>$valor){
}
}
	?>
</fieldset>

<fieldset>
<legend>HABILIDADES</legend>
	<tr>
	<hr>
		
	<?php  
	$datos=array("Trabajo en equipo,"=>"Capacidad de tomar decisiones.","Buena capacidad de comunicacion,"=>"Trabajo Bajo presion.",);
foreach ($datos as $clave=>$valor){
	echo  "$clave  $valor <br>";
	echo "<pre>";
	echo "<hr>";
}
	if(empty($datos)) {
//Está vació
} else {
foreach ($datos as $clave=>$valor){
}
}
?>
</fieldset>

<fieldset>
	<legend>IDIOMAS</legend>
	<tr>
	<hr>
	
	<?php  
	$datos=array("Ingles"=>"(Medio).","Espanol"=>"(Muy Bueno).",);
foreach ($datos as $clave=>$valor){
	echo  "$clave  $valor <br>";
	echo "<pre>";
	echo "<hr>";
}
	if(empty($datos)) {
//Está vació
} else {
foreach ($datos as $clave=>$valor){
}
}
?>
</fieldset>

<fieldset>
	<legend>REFERENCIAS PERSONALES</legend>
	<tr>
	<hr>
	
	<?php  
	$datos=array("Lic. Paola Tavarez"=>"(809-331-2552).","In.Roberto Martinez"=>"(829-255-5225).","Ing.German Rodriguez"=>"(829-455-2524)");
foreach ($datos as $clave=>$valor){
	echo  "$clave  $valor <br>";
	echo "<pre>";
	echo "<hr>";
}
	if(empty($datos)) {
//Está vació
} else {
foreach ($datos as $clave=>$valor){
}
}
?>
</fieldset>




</body>
</html>