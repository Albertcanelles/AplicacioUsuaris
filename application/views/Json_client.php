<!DOCTYPE html>
<html>

<?php   
  

?>
<head>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
</head>

<body>

<input id="boto" type="button" value="Mostrar"> 


<p>
<b>Nom:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span id="nom"></span><br> 
<b>Cognom:</b> &nbsp;<span id="cognom"></span><br> 
<b>Adreça:</b> &nbsp;&nbsp;&nbsp;&nbsp;<span id="adresa"></span><br> 
<b>Ciutat:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="ciutat"></span><br> 
<b>País:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="pais"></span><br> 
<b>Telefon:</b> &nbsp;&nbsp;&nbsp;<span id="telefon"></span><br> 
</p> 

</body>

<script type="text/javascript">
$("#boto").click(function(){
  $.getJSON("/codeigniterhelloworld/index.php/Json_usuaris/index/1",function(result){
  	$("#nom").html(result.Nom);
  	$("#cognom").html(result.Cognom);
  	$("#adresa").html(result.Adreça);
  	$("#ciutat").html(result.Ciutat);
  	$("#pais").html(result.Pais);
  	$("#telefon").html(result.Telefon);

  });
}); 

</script>


</html>