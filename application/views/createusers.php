<html>
<head>
<?php include("bootstrap.txt"); ?>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand">Crea el teu usuari</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="resetusers">Canvia la teva contrasenya</a></li>
            <li><a href="modifyusers">Modifica el teu usuari</a></li>
            <li><a href="/codeigniterhelloworld/application/views/pagina.php">Menu Principal</a></li>
          </ul>
        </div>
      </div>
      </div>
<div>
</div>
</br>
</br>
</br>
</br>

      <form method="post" action="saveusers">
          <table border = "0">
            <tr>
              <td>ID:</td>
              <td><input type="text" name="ID" id="ID"> </td>
            </tr>
            <tr>
             <td>Nom:</td>
              <td><input type="text" name="Name" id="Name" ></td>
            </tr>
            <tr>
              <td>Codi Pais:</td>
              <td><input type="text" name="CountryCode" id="CountryCode"> </td>
            </tr>
            <tr>
              <td>Districte:</td>
              <td><input type="text" name="District" id="District" ></td>
            </tr>
            <tr>
              <td>Num Habitans:</td>
              <td><input type="text" name="Population" id="Population" ></td>
            </tr>
         </table>

         <input type="submit" name="CrearUsuaris" value="Registrat"/>
        </form>
</div>
</body>
</html>
