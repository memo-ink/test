<?php
include 'conexion_SQL.php';

  $sql=sqlsrv_query($mssql,"SELECT CVE_ART,DESCR FROM INVE01;");
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
  						<h3 class="panel-title">Productos</h3>
  						<!--div class="pull-right">
  							<span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
  								<i class="glyphicon glyphicon-filter"></i>
  							</span>
  						</div-->
  					</div>
  					<div class="panel-body">
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
  ';
  $n=0;
  while($row=sqlsrv_fetch_array($sql)){$n++;
    $clave=$row['CVE_ART'];
    $des=$row['DESCR'];
    $resultado.='
    <tr>
        <td>'.$n.'</td>
        <td>'.$clave.'</td>
        <td>'.$des.'</td>
    </tr>';
  }
  $resultado.='<tr><td colspan="2">Total Registros: '.$n.'</td></tr>';
  $resultado.='
  </tbody>
</table>
</div>
</div>
</div>
</div>';

echo $resultado;
sqlsrv_close($mssql);
?>
