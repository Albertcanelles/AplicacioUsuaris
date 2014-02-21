<!DOCTYPE html>
<html>
<body>
<h2>Llistat de persones amb Json</h2>
<p>
Nom: <span id="fname1"></span><br> 
Cognom: <span id="lname1"></span><br> 
</p> 
<p>
Nom: <span id="fname2"></span><br> 
Cognom: <span id="lname2"></span><br> 
</p> 
<p>
Nom: <span id="fname3"></span><br> 
Cognom: <span id="lname3"></span><br> 
</p> 

<script>
var txt = '{"employees":[' +
'{"firstName":"John","lastName":"Doe" },' +
'{"firstName":"Anna","lastName":"Smith" },' +
'{"firstName":"Peter","lastName":"Jones" }]}';

var obj = eval ("(" + txt + ")");

document.getElementById("fname1").innerHTML=obj.employees[1].firstName 
document.getElementById("lname1").innerHTML=obj.employees[1].lastName 

document.getElementById("fname2").innerHTML=obj.employees[2].firstName 
document.getElementById("lname2").innerHTML=obj.employees[2].lastName 

document.getElementById("fname3").innerHTML=obj.employees[0].firstName 
document.getElementById("lname3").innerHTML=obj.employees[0].lastName 
</script>
</body>
</html>
