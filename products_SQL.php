<?php
include 'conexion_SQL2.php';
  $titulo='Productos';
  $query = $db->query('SELECT * FROM dbo.INVE01');
  $n=0;$productos='';
  $query->execute();
  while($row = $query->fetch(PDO::FETCH_ASSOC)){$n++;
    $clave=$row['CVE_ART'];
    $descr=$row['DESCR'];
    $des=htmlentities($descr, ENT_COMPAT,'ISO-8859-1', true);
    $productos.='
    <tr>
        <td>'.$n.'</td>
        <td>'.$clave.'</td>
        <td>'.$des.'</td>
    </tr>';
  }

  $resultado='
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->

  <div class="container">
      <h1>NEOCOM</h1>
      	<div class="row">
  			<div class="col-md-12">
  				<div class="panel panel-primary">
  					<div class="panel-heading">
  						<h3 class="panel-title">'.$titulo.'</h3>
  						<!--div class="pull-right">
  							<span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
  								<i class="glyphicon glyphicon-filter"></i>
  							</span>
  						</div-->
  					</div>
  					<div class="panel-body">Total Registros: <b>'.$n.'</b>
  						<!--input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" /-->
  					</div>
  					<table class="table table-hover" id="task-table">
  						<thead>
  							<tr>
  								<th>#</th>
  								<th>CLAVE</th>
  								<th>DESCRIPCION</th>
  							</tr>
  						</thead>
  						<tbody>
                '.$productos.'
                <tr><td colspan="3">Total Registros: <b>'.$n.'</b></td></tr>
              </tbody>
            </table>
          </div>
      </div>
    </div>
</div>';

echo $resultado;

?>
