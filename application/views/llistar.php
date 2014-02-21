<!DOCTYPE html>
<html>
<head>

<!-- Bootstrap -->

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">
<!--<style type="text/css" title="currentStyle">
			@import "<?php //echo base_url('assets/TableTools/media/css/TableTools.css');?>";
			@import "<?php //echo base_url('assets/TableTools/media/css/TableTools_JUI.css');?>";
		</style>-->

<!-- jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>  

<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

<!--Scripts de table tools-->
<!--<script type="text/javascript" charset="utf-8" src="<?php// echo base_url('assets/TableTools/media/js/ZeroClipboard.js');?>"></script>
<script type="text/javascript" charset="utf-8" src="<?php //echo base_url('assets/TableTools/media/js/TableTools.js');?>"></script> -->

<!--Script i funcio fixed columns-->
<style type="text/css">
	table{
		max-width: none;
	}

</style>
<script type="text/javascript" charset="utf-8" src="media/js/FixedColumns.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready( function () {
				var oTable = $('#botons').dataTable( {
					"sScrollY": "300px",
					"sScrollX": "100%",
					"sScrollXInner": "150%",
					"bScrollCollapse": true,
					"bPaginate": false
				} );
				new FixedColumns( oTable );
			} );
		</script>
<script type="text/javascript">
$(document).ready(function() {
	$('#users_table').dataTable({    
	"bPaginate": true,
    "bLengthChange": true,
    "bFilter": true,
    "bSort": true,
    "bInfo": true,
    "bAutoWidth": true
	});
} );
</script>


<!--Funcio del table tool s-->

<!-- 
<script type="text/javascript">
	$(document).ready( function () {
    $('#botons').dataTable( {
        "sDom": 'T<"clear">lfrtip',
        "oTableTools": {
            "sSwfPath": "<?php //echo base_url('assets/TableTools/media/swf/copy_csv_xls_pdf.swf');?>"
        }
    } );
} );
</script>
-->
	
</head>
<body>

	<?php include('navbar_top.html'); ?><br><br><br>

	<h3 align=center>Usuaris</h3><br>

	<!--<h1><?php //echo '<pre>'; print_r($this->_ci_cached_vars); die(); ?></h1>-->

	<div align="right">
	 				<a href='/codeigniterusuaris/index.php/usuaris/crear'>
						<button type="button" class="btn btn-success">
				  			<span class="glyphicon glyphicon-plus"></span> 
				  			<span class="glyphicon glyphicon-user"></span> 
						</button>
					</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	</div> 

	
	<table cellpadding="0" cellspacing="0" border="0" id="botons" class="table table-striped" width="100%" align="center">
		<thead bgcolor=#819FF7>
			<tr>
				<th>Nom</th>
				<th>Cognom</th>
				<th>Adre&ccedil;a</th>
				<th>Ciutat</th>
				<th>Pais</th>
				<th>Telefon</th>
				<th>ID</th>
				<th>Accions</th>
				
			</tr>
		</thead>
		<tbody>

			
			<?php foreach($this->_ci_cached_vars as $index => $persona){ ?>
			<tr>
				<td><?php echo $persona['Nom']; ?></td>
				<td><?php echo $persona['Cognom']; ?></td>
				<td><?php echo $persona['Adreça']; ?></td>
				<td><?php echo $persona['Ciutat']; ?></td>
				<td><?php echo $persona['Pais']; ?></td>
				<td><?php echo $persona['Telefon']; ?></td>
				<td><?php echo $persona['id']; ?></td>
				<td>
					<a href='/codeigniterusuaris/index.php/usuaris/modificar/<?php echo $persona['id']; ?>'>
						<button type="button" class="btn btn-warning btn-sm">
				  			<span class="glyphicon glyphicon-pencil"></span> 
						</button>
					</a>&nbsp;
					<a href='/codeigniterusuaris/index.php/usuaris/eliminare/<?php echo $persona['id']; ?>'>
						<button type="button" class="btn btn-danger btn-sm">
				  			<span class="glyphicon glyphicon-remove"></span> 
						</button>
					</a> 
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	
	<div align="right" style=margin-top:176px;>
		<a href='javascript:history.back()'>
			<button type="button" class="btn btn-primary">
				Atras
			</button>
		</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
	</div> 

</body>





</html>

<!--<script>$(document).ready(function() {
	$('#demo').html( '<table cellpadding="0" cellspacing="0" border="0" class="display" id="example"></table>' );
	$('#example').dataTable( {
		"aaData": [
			/* Reduced data set */
			[ "Trident", "Internet Explorer 4.0", "Win 95+", 4, "X" ],
			[ "Trident", "Internet Explorer 5.0", "Win 95+", 5, "C" ],
			[ "Trident", "Internet Explorer 5.5", "Win 95+", 5.5, "A" ],
			[ "Trident", "Internet Explorer 6.0", "Win 98+", 6, "A" ],
			[ "Trident", "Internet Explorer 7.0", "Win XP SP2+", 7, "A" ],
			[ "Gecko", "Firefox 1.5", "Win 98+ / OSX.2+", 1.8, "A" ],
			[ "Gecko", "Firefox 2", "Win 98+ / OSX.2+", 1.8, "A" ],
			[ "Gecko", "Firefox 3", "Win 2k+ / OSX.3+", 1.9, "A" ],
			[ "Webkit", "Safari 1.2", "OSX.3", 125.5, "A" ],
			[ "Webkit", "Safari 1.3", "OSX.3", 312.8, "A" ],
			[ "Webkit", "Safari 2.0", "OSX.4+", 419.3, "A" ],
			[ "Webkit", "Safari 3.0", "OSX.4+", 522.1, "A" ]
		],
		"aoColumns": [
			{ "sTitle": "Engine" },
			{ "sTitle": "Browser" },
			{ "sTitle": "Platform" },
			{ "sTitle": "Version", "sClass": "center" },
			{
				"sTitle": "Grade",
				"sClass": "center",
				"fnRender": function(obj) {
					var sReturn = obj.aData[ obj.iDataColumn ];
					if ( sReturn == "A" ) {
						sReturn = "<b>A</b>";
					}
					return sReturn;
				}
			}
		]
	} );	
} );
</script>

<script type="text/javascript">  $(document).ready(function() {
	$('#example').dataTable( {
		"bProcessing": true,
		"sAjaxSource": '../examples_support/json_source.txt'
	} );
} );</script>-->