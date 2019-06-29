<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logo3.png">
    <title>Clinica ADS</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="../assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--c3 CSS -->
    <link href="../assets/node_modules/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../html/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="..html/css/style2.css">
    <!-- Dashboard 1 Page CSS -->
    <link href="../html/css/pages/dashboard1.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="../html/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="../assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../html/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="../html/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../html/js/jquery.mask.min.js"></script>
         <script type="text/javascript">
       $(document).ready(function(){
            $("#valor").mask("999.999.990,00", {reverse: true}
        })
    </script>
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Clinica</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/images/clin.jpg" height="40" width="40" alt="homepage" class="dark-logo" <h6>Clinica Medica</h6>
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         </span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <td><img src="../assets/images/logo3.png" height="40" width="40"></td><br>
                        <td><h1>Clinica</h1></td> <td><h1 class="text-themecolor">ADS</h1></td>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                       
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- Barra Lateral -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="../html/index.html" aria-expanded="false"><i class="fa fa-home"></i><span class="hide-menu">Inicio  </span></a>
                        </li>
                    
                       <li> <a class="waves-effect waves-dark" href="../html/consulta.html" aria-expanded="false"><i class="fa fa-reply"></i><span class="hide-menu">Anterior</span></a>
                        </li>
                        
                    </ul>
                    
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Tela Cadastro</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item">Consutas</li>
                            <li class="breadcrumb-item active">Cadastro</li>
                        </ol>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Sales Chart and browser state-->
                <!-- ============================================================== -->
               
                <!-- ============================================================== -->
                <!-- Plano de Fundo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Projects of the Month -->
                <!-- ============================================================== -->
                
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-4"  
                           
                     <div class="card-body">
                     </div>
                    </div>
                                

    <form method="POST" action="../Controller/Salvar_consulta.php">
  
  <h1>marcar nova consulta</h1><br>
  <div class="form-row">
  <div class="form-group col-md-5">

      <label>Data da consulta:</label>
      <input type="date"  class="form-control" name="data_cons" id="data_cons" placeholder="Nome completo">
    </div>
    <div class="form-group col-md-3">
      <label>Horario</label>
      <input type="time" class="form-control" name="horario" id="horario" required>
    </div>
    </div>


    <div class="form-group col-md-5">
      <label for="prontuario">Paciente</label>
      <select class="form-control" name="id_paciente">
     <?php 
    require_once '../Model/conexao.php';
    require_once '../Model/PacienteDAO.php';
    $consulta = new PacienteDAO();
    $result = $consulta -> Listar_paciente($conn);
    foreach ($result as $key => $value) {
        echo "<option value=".$value['id'].">".$value['nome']."</option>";

    }

?>
 </select>
    </div>

    <div class="form-group col-md-5">
      <label for="prontuario">Medico</label>
      <select class="form-control" name="id_medico">
     <?php 
    require_once '../Model/conexao.php';
    require_once '../Model/MedicoDAO.php';
    $consulta = new MedicoDAO();
    $result = $consulta -> Listar_medico($conn);
    foreach ($result as $key => $value) {
        echo "<option value=".$value['id'].">".$value['nome_med']."</option>";
    }
?>
 </select>
    </div>
  
    <div class="form-group col-md-3">
        <label>Valor da consulta</label>
    <input type="number" class="form-control" name="valor" id="valor" maxlength="10" required>
       
    </div>

  <div class="form-group col-md-2">
  <button type="submit" value="submit" name="enviar" class="btn btn-primary" >salvar</button>
  </div>
</form>                 
                 
                <!-- ============================================================== -->
                <!-- End Projects of the Month -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Notification And Feeds -->
                <!-- ============================================================== -->
               
                    <!-- End Notification -->
                    <!-- Start Feeds -->
                    
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/node_modules/jquery/jquery.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="../assets/node_modules/bootstrap/js/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../html/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="..html/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../html/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../html/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="../assets/node_modules/raphael/raphael-min.js"></script>
    <script src="../assets/node_modules/morrisjs/morris.min.js"></script>
    <!--c3 JavaScript -->
    <script src="../assets/node_modules/d3/d3.min.js"></script>
    <script src="../assets/node_modules/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="../html/js/dashboard1.js"></script>

</body>

</html>