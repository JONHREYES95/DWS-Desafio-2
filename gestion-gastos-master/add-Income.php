<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['detsuid'] == 0)) {
	header('location:logout.php');
} else {

	if (isset($_POST['submit'])) {
		$userid = $_SESSION['detsuid'];
		$IncomeDate = $_POST['IncomeDate'];
		$IncomeItem = $_POST['IncomeItem'];
		$IncomeAmount = $_POST['IncomeAmount'];
		$query = mysqli_query($con, "INSERT INTO tblincome(userid,IncomeDate,IncomeItem,IncomeAmount) VALUES('$userid','$IncomeDate','$IncomeItem','$IncomeAmount')");
		if ($query) {
			echo "<script>alert('El ingreso ha sido agregado');</script>";
			echo "<script>window.location.href='manage-Income.php'</script>";
		} else {
			echo "<script>alert('Algo salió mal. Por favor, intente de nuevo');</script>";
		}
	}
?>

<!DOCTYPE html>
	<html lang="es">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Seguimiento de Gastos Diarios || Agregar Ingreso</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font-awesome.min.css" rel="stylesheet">
		<link href="css/datepicker3.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">

		<!--Fuente Personalizada-->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
		<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
		<link rel="shortcut icon" href="./assets/images/php-icon.png" type="image/x-icon">
	</head>

	<body>
		<?php include_once('includes/header.php'); ?>
		<?php include_once('includes/sidebar.php'); ?>

		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="row">
				<ol class="breadcrumb">
					<li><a href="#">
							<em class="fa fa-home"></em>
						</a></li>
					<li class="active">Ingreso</li>
				</ol>
			</div><!--/.row-->

			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">Ingreso</div>
						<div class="panel-body">
							<p style="font-size:16px; color:red" align="center"> <?php if (isset($msg)) {
																						echo $msg;
																					}  ?> </p>
							<div class="col-md-12">
								<form role="form" method="post" action="">
									<div class="form-group">
										<label>Fecha del Ingreso</label>
										<input class="form-control" type="date" name="IncomeDate" required="true">
									</div>
									<div class="form-group">
										<label>Motivo</label>
										<input type="text" class="form-control" name="IncomeItem" required="true">
									</div>
									<div class="form-group">
										<label>Cantidad del ingreso</label>
										<input class="form-control" type="number" step="0.01" required="true" name="IncomeAmount">
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-primary" name="submit">Agregar</button>
									</div>
								</form>
							</div>
						</div>
					</div><!-- /.panel-->
				</div><!-- /.col-->
				<?php include_once('includes/footer.php'); ?>
			</div><!-- /.row -->
		</div><!--/.main-->

		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/chart.min.js"></script>
		<script src="js/chart-data.js"></script>
		<script src="js/easypiechart.js"></script>
		<script src="js/easypiechart-data.js"></script>
		<script src="js/bootstrap-datepicker.js"></script>
		<script src="js/custom.js"></script>

	</body>

	</html>
	<?php }  ?>