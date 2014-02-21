<!DOCTYPE html>
<html>
<head>
	<?php include('includes.html'); ?>
</head>
<body>

	<?php include('navbar_top.html'); ?>
<br><br><br><br>
<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Usuari Eliminat</h1>

<form method="post" accept-charset="utf-8" action="/codeigniterusuaris/index.php/usuaris/eliminare" />
<input type="text" name="id" id="id" value="<?php echo $ID;?>" maxlength="20" size="20" style="width:0%" />



	<div align="right" style=margin-top:500px;>
		
			<button type="submit" class="btn btn-primary">
				Inici
			</button>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
	</div> 	
</form>

</body>
</html>
