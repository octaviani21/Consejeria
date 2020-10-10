<?php
require 'inc/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CONSEJERIA-UPRA | STUDENT</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="stylesheet" href="dist/css/expendiente.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="inicio.html" class="nav-link">Inicio</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-danger navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="inicio.html" class="brand-link">
      <img src="img/university.jpg" alt="UPRA Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">CONSEJERIA UPRA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="img/profeliana.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block">Eliana Valenzuela Andrade</a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="inicio.html" class="nav-link">
               <i class="fas fa-home"></i>&nbsp;&nbsp;&nbsp;&nbsp;
              <p>Inicio</p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="studentdata.php" class="nav-link">
               <i class="fas fa-user-graduate"></i>&nbsp;&nbsp;&nbsp;&nbsp;
              <p>Data Estudiantes</p>
            </a>
          </li>
           <li class="nav-item has-treeview menu-open">
            <a href="calendar.php" class="nav-link">
               <i class="far fa-calendar-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;
              <p>Calendario</p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="mailbox.php" class="nav-link">
               <i class="far fa-envelope"></i>&nbsp;&nbsp;&nbsp;&nbsp;
              <p>Mail Box</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>PROGRAMA ACADEMICO</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicio.html">Inicio</a></li>
              <li class="breadcrumb-item active">PROGRAMA ACADEMICO</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div align='center'><h3>UNIVERSIDAD DE PUERTO RICO EN ARECIBO</h3>
                                    <h3>DEPARTAMENTO DE CIENCIAS DE COMPUTOS</h3>
                                    <h3>EVALUACION BACHILLERATO EN CIENCIAS DE COMPUTOS</h3></div>
              </div>
                <?php 
                $sql = "SELECT id_est, correo_est, num_est, apellido_estU, apellido_estD, nombre_est, inicial_est
                      FROM estudiante WHERE id_est = 2";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
              
                if($resultCheck > 0){
                $row = mysqli_fetch_assoc($result);
                 echo "<div class='card-header'>
                    Nombre: <b> {$row['nombre_est']} {$row['inicial_est']} {$row['apellido_estU']} {$row['apellido_estD']} </b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Correo: <b>{$row['correo_est']}</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Semestre: <b>2</b><br>
                    Número de Estudiante: <b>{$row['num_est']}</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Créditos Recomendado: <b>6</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Año: <b>5</b><br>
           
                    </div><br>
                    <div class='btn-group'>
                    
                    <div class='container'>
                      <!-- Trigger the modal with a button -->
                      <button style='float: right;' type='button' class='button inicio' data-toggle='modal' data-target='#myModal'>EDITAR</button>

                      <!-- Modal -->
                      <div class='modal fade' id='myModal' role='dialog'>
                        <div class='modal-dialog'>

                          <!-- Modal content-->
                          <div class='modal-content'>
                            <div class='modal-header'>
                              <button type='button' class='close' data-dismiss='modal'>&times;</button>
                            </div>
                            <div class='modal-body'>
                              <form action='edtiest.php' method='post'>
          <div class='input-group mb-3'>
          <input type='text'' name='item_id' class='form-control' placeholder='CURSO'>
          <div class='input-group-append'>
            <div class='input-group-text'>
              <span class='fas fa-chalkboard-teacher'></span>
            </div>
          </div>
              
        </div>
         <div class='input-group mb-3'>
          <input type='text' name='item_id' class='form-control' placeholder='CAMBIAR NOMBRE AL CURSO'>
          <div class='input-group-append'>
            <div class='input-group-text'>
              <span class='fas fa-chalkboard-teacher'></span>
            </div>
          </div>
        </div>
          
          <div class='input-group mb-3'>
            <label>Description: &nbsp; </label>
              <textarea rows='4' cols='50' name='description' class='form-control' placeholder='DESCRIPCION' required>
              </textarea>
          <div class='input-group-append'>
            <div class='input-group-text'>
              <span class='fa fa-font'></span>
            </div>
          </div>
        </div>
          
          
          <div class='input-group mb-3'>
          <input type='text' name='item_id' class='form-control' placeholder='NOTA'>
          <div class='input-group-append'>
            <div class='input-group-text'>
              <span class='fas fa-clipboard'></span>
            </div>
          </div>
        </div>
          <div class='input-group mb-3'>
          <input type='text' name='name' class='form-control' placeholder='MATRICULADO'>
          <div class='input-group-append'>
            <div class='input-group-text'>
              <span class='fas fa-user'></span>
            </div>
          </div>
        </div>
            <div class='input-group mb-3'>
          <input type='text' name='name' class='form-control' placeholder='RECOMENDACION'>
          <div class='input-group-append'>
            <div class='input-group-text'>
              <span class='fas fa-comment-dots'></span>
            </div>
          </div>
        </div>
          <div class='input-group mb-3'>
          <input type='text' name='name' class='form-control' placeholder='AÑO APROBADO'>
          <div class='input-group-append'>
            <div class='input-group-text'>
              <span class='fas fa-comment-dots'></span>
            </div>
          </div>
        </div>
          <div class='input-group mb-3'>
          <input type='text' name='name' class='form-control' placeholder='CONVALIDACION'>
          <div class='input-group-append'>
            <div class='input-group-text'>
              <span class='fas fa-comment-dots'></span>
            </div>
          </div>
        </div>
        <div class='row'>
          <div class='col-8'>
            <div class='icheck-primary'>
    
            </div>
          </div>
        </div>
      </form>
                            </div>
                            <div class='modal-footer'>
                              <button type='button' class='btn btn-default' data-dismiss='modal'>APPLY</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
              </div>";}
                ?>
              <!-- /.card-header -->
    
        
              <div class="card-body"> 
                <div align = "center"><h3>Cursos de Concentración</h3></div>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr width="50%" bgcolor="yellow">
                    <th>Cursos</th>
                    <th>Descripción</th>
                    <th>Créditos</th>
                    <th>Nota</th>
                    <th>Matriculado</th>
                    <th>Recomendación</th>
                    <th>Iniciales</th>
                    <th>Año Aprobó</th>
                    <th>Convalidación</th>
                  </tr>
                  </thead> 
                  <tbody>
                <?php 
                $sql ="SELECT nombre_c, descripción_c, créditos_c, nota_c, estatus_c, año_aprobo_c
                      FROM expediente WHERE id_rol = 1";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
              
                if($resultCheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                  
                  echo "<tr width='50%' bgcolor='D6D2D2'>
                    <td>{$row['nombre_c']}</td>
                    <td>{$row['descripción_c']}</td>
                    <td>{$row['créditos_c']}</td>
                    <td>{$row['nota_c']}</td>
                    <td>{$row['estatus_c']}</td>
                    <td></td>
                    <td></td>
                    <td>{$row['año_aprobo_c']}</td>
                    <td></td>
                  </tr> ";}}?>
                      
                </tbody> 
                  </table>
                  <div align = "center"><h3>Cursos Generales Obligatorios</h3></div>
                    <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr width="50%" bgcolor="yellow">
                    <th>Cursos</th>
                    <th>Descripción</th>
                    <th>Créditos</th>
                    <th>Nota</th>
                    <th>Matriculado</th>
                    <th>Recomendación</th>
                    <th>Iniciales</th>
                    <th>Año Aprobó</th>
                    <th>Convalidación</th>
                  </tr>
                  </thead> 
                  <tbody>
                <?php 
                $sql ="SELECT nombre_c, descripción_c, créditos_c, nota_c, estatus_c, año_aprobo_c
                      FROM expediente WHERE id_rol = 2 OR id_rol = 4";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
              
                if($resultCheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                  
                  echo "<tr width='50%' bgcolor='D6D2D2'>
                    <td>{$row['nombre_c']}</td>
                    <td>{$row['descripción_c']}</td>
                    <td>{$row['créditos_c']}</td>
                    <td>{$row['nota_c']}</td>
                    <td>{$row['estatus_c']}</td>
                    <td></td>
                    <td></td>
                    <td>{$row['año_aprobo_c']}</td>
                    <td></td>
                  </tr> ";}}?>
                </tbody>
                  </table>
                   <div align = "center"><h3>Electivas Libres</h3></div>
                    <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr width="50%" bgcolor="yellow">
                    <th>Cursos</th>
                    <th>Descripción</th>
                    <th>Créditos</th>
                    <th>Nota</th>
                    <th>Matriculado</th>
                    <th>Recomendación</th>
                    <th>Iniciales</th>
                    <th>Año Aprobó</th>
                    <th>Convalidación</th>
                  </tr>
                  </thead> 
                <tbody>
                <?php 
                $sql ="SELECT nombre_c, descripción_c, créditos_c, nota_c, estatus_c, año_aprobo_c
                      FROM expediente WHERE id_rol = 3 OR id_rol = 6 OR id_rol = 7 OR id_rol = 8 OR id_rol = 9 OR id_rol = 10";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
              
                if($resultCheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                  
                  echo "<tr width='50%' bgcolor='D6D2D2'>
                    <td>{$row['nombre_c']}</td>
                    <td>{$row['descripción_c']}</td>
                    <td>{$row['créditos_c']}</td>
                    <td>{$row['nota_c']}</td>
                    <td>{$row['estatus_c']}</td>
                    <td></td>
                    <td></td>
                    <td>{$row['año_aprobo_c']}</td>
                    <td></td>
                  </tr> ";}}?>
                </tbody> 
                  </table>
                   <div align = "center"><h3>Electivas Departamentales</h3></div>
                    <table id="example2" class="table table-bordered table-hover">
                     <thead>
                  <tr width="50%" bgcolor="yellow">
                    <th>Cursos</th>
                    <th>Descripción</th>
                    <th>Créditos</th>
                    <th>Nota</th>
                    <th>Matriculado</th>
                    <th>Recomendación</th>
                    <th>Iniciales</th>
                    <th>Año Aprobó</th>
                    <th>Convalidación</th>
                  </tr>
                  </thead> 
                <tbody>
                <?php 
                $sql ="SELECT nombre_c, descripción_c, créditos_c, nota_c, estatus_c, año_aprobo_c
                      FROM expediente WHERE id_rol = 11 OR id_rol = 12 OR id_rol = 13 ";
                    $result = mysqli_query($conn, $sql);
                    $resultCheck = mysqli_num_rows($result);
              
                if($resultCheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                  
                  echo "<tr width='50%' bgcolor='D6D2D2'>
                    <td>{$row['nombre_c']}</td>
                    <td>{$row['descripción_c']}</td>
                    <td>{$row['créditos_c']}</td>
                    <td>{$row['nota_c']}</td>
                    <td>{$row['estatus_c']}</td>
                    <td></td>
                    <td></td>
                    <td>{$row['año_aprobo_c']}</td>
                    <td></td>
                  </tr> ";}}?>

                    </table>
                  <b align="right"> Total de Creditos Electivas Departamentales: 14</b>
                  
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

           
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 <a>Consejeria-UPRA</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->

</body>
</html>