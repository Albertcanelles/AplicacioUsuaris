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
          <a href="#" class="navbar-brand">Llista Usuaris</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="createusers">Registrat</a></li>
            <li><a href="createusers">Canvia contrasenya</a></li>
            <li><a href="modifyusers">Modifica l'usuari</a></li>
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
Encara no ets membre fes click aqui <a href="createusers"><input type="button" class="btn btn-sm btn-success"  name="boton" value="Registrat"/></a></br>
<table class="table-striped" id="25" border="1" bordercolor="#000000" width="100%" cellpadding="3" cellspacing="3">
                <thead>
                <tr>
                        <th><b>ID</b></th>
                        <th><b>Nom</b></th>
                        <th><b>Codi Pais </b></th>
                        <th><b>Districte </b></th>
                        <th><b>Poblacio </b></th>
                        <!--<th><b>DNI</b></th>
                        <th><b>Direccio</b></th>
                        <th><b>Edad</b></th>
                        <th><b>Sexe</b></th>-->
                        <th><b>Accions</b></th>
                </tr>
                </thead>
                <tbody>
                        <?php 
                        foreach($query->result() as $index){ 
                                echo "<tr>";
                                echo "<td>" .$index ->ID. "</td>";
                                echo "<td>" .$index-> Name. "</td>";
                                echo "<td>" .$index-> CountryCode. "</td>";
                                echo "<td>" .$index-> District. "</td>";
                                echo "<td>" .$index-> Population. "</td>";
                                echo "<td>".' <a href="modificarusuari/1"><button class="btn btn-primary" type="button">Modificar</button></a>'.
                        '<a href="eliminarusuari/1"><button class="btn btn-danger" type="button">Eliminar</button></a>'."</td>";
                        echo "</tr>";}
                        
                        ?>        
                </tbody>
</table>

<footer>
        <p align="center">&copy; Albert Canelles Panisello</p>
        <!--<p><?php echo $hello;?></p>-->

	</footer>
</body>

</html>
