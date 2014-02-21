<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="/codeigniterhelloworld/application/views/json2.js"></script>
</head>	
<body>
<h2>Create Object from JSON String</h2>
<p>
First Name: <span id="fname"></span><br> 
Last Name: <span id="lname"></span><br> 
</p> 
<script>
var myJSONObject = {"bindings": [
        {"ircEvent": "PRIVMSG", "method": "newURI", "regex": "^http://.*"},
        {"ircEvent": "PRIVMSG", "method": "deleteURI", "regex": "^delete.*"},
        {"ircEvent": "PRIVMSG", "method": "randomURI", "regex": "^random.*"}
    ]
};

var myObject = JSON.parse(myJSONtext, reviver);

document.getElementById("fname").innerHTML=myObject.bindings[1].firstName 
document.getElementById("lname").innerHTML=myObject.bindings[1].lastName 
</script>
</body>
</html>
