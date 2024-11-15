<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="https://saberescincopuntocero.com/wp-content/uploads/2020/10/PERFIL-VACIO.png" class="img-fluid" alt="Foto de perfil">
        </div>
        <div class="profile-usertitle">
            <?php
            $uid = $_SESSION['detsuid'];
            $ret = mysqli_query($con, "SELECT FullName FROM tbluser WHERE ID='$uid'");
            $row = mysqli_fetch_array($ret);
            $name = $row['FullName'];
            ?>
            <div class="profile-usertitle-name"><?php echo $name; ?></div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>En línea</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>

    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="dashboard.php"><i class="fa fa-dashboard"></i>Balances</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#menu-gastos">
                <i class="fa fa-navicon"></i> Gastos <i class="fa fa-plus float-right"></i>
            </a>
            <ul class="nav flex-column collapse" id="menu-gastos">
                <li class="nav-item"><a class="nav-link" href="add-expense.php"><i class="fa fa-arrow-right"></i> Añadir Gastos</a></li>
                <li class="nav-item"><a class="nav-link" href="manage-expense.php"><i class="fa fa-arrow-right"></i>Informacion de gastos</a></li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#menu-Ingresos">
                <i class="fa fa-navicon"></i> Ingresos <i class="fa fa-plus float-right"></i>
            </a>
            <ul class="nav flex-column collapse" id="menu-Ingresos">
                <li class="nav-item"><a class="nav-link" href="add-Income.php"><i class="fa fa-arrow-right"></i> Añadir Ingresos</a></li>
                <li class="nav-item"><a class="nav-link" href="manage-Income.php"><i class="fa fa-arrow-right"></i>Informacion de Ingresos</a></li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#menu-informes">
                <i class="fa fa-navicon"></i>Informes<i class="fa fa-plus float-right"></i>
            </a>
            <ul class="nav flex-column collapse" id="menu-informes">
                <li class="nav-item"><a class="nav-link" href="expense-datewise-reports.php"><i class="fa fa-arrow-right"></i> Ver Gastos</a></li>
                <li class="nav-item"><a class="nav-link" href="expense-monthwise-reports.php"><i class="fa fa-arrow-right"></i> Ver Ingresos</a></li>
                <li class="nav-item"><a class="nav-link" href="expense-yearwise-reports.php"><i class="fa fa-arrow-right"></i> Gastos Anuales</a></li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="user-profile.php"><i class="fa fa-user"></i> Perfil</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="change-password.php"><i class="fa fa-lock"></i>Contraseña</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Cerrar Sesión</a>
        </li>
    </ul>
</div>