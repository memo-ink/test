<?php
include 'conexion_SQL2.php';
  $titulo='Clientes';
  $query = $db->query('SELECT * FROM dbo.CLIE01');
  $n=0;$clientes='';
  $query->execute();
  while($row = $query->fetch(PDO::FETCH_ASSOC)){$n++;
    $cve=$row['CLAVE'];
    $nom=htmlentities($row['NOMBRE'], ENT_COMPAT,'ISO-8859-1', true);
    $rfc=$row['RFC'];
    $clientes.='
    <tr>
        <td>'.$cve.'</td>
        <td>'.$nom.'</td>
        <td>'.$rfc.'</td>
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
  								<th>CLAVE</th>
  								<th>NOMBRE</th>
  								<th>RFC</th>
  							</tr>
  						</thead>
  						<tbody>
                '.$clientes.'
                <tr><td colspan="2">Total Registros: <b>'.$n.'</b></td></tr>
              </tbody>
            </table>
          </div>
      </div>
    </div>
</div>';

echo $resultado;

?>
