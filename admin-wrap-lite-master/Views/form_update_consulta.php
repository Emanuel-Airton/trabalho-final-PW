


<?php
	
	require_once '../Model/conexao.php';
	require_once '../Model/ConsultaDAO.php';

	$id = $_GET['id'];
		$consulta = new ConsultaDAO;

		$result = $consulta -> buscar_consulta_id($conn, $id);

		if($result){
			$row = $result -> fetch(PDO:: FETCH_OBJ);
			//echo $row -> nome;
		}
 
?>

<html>

<head>
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logo3.png">
    <title>Clinica ADS</title>
	<meta charset="utf-8">

	<link href="../assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="../assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--c3 CSS -->
    <link href="../assets/node_modules/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../html/css/style.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <!-- You can change the theme colors from here -->
    <link href="../html/css/colors/default.css" id="theme" rel="stylesheet">

    <script src="../assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../html/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="../html/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../html/js/jquery.mask.min.js"></script>
         <script type="text/javascript">
       $(document).ready(function(){
            $("#telefone").mask("(00) 0000-0000")
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
            <p class="loader__label">Admin Wrap</p>
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
                        
                        <!-- ============================================================== -->
                        <!-- borda superior -->
                        <!-- ============================================================== -->
                          <h1>clinica medica</h1> 
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
                        <li> <a class="waves-effect waves-dark" href="../html/consulta.html" aria-expanded="false"><i class="fa fa-hospital-o"></i><span class="hide-menu">Consulta</span></a>
                        </li>
                       <li> <a class="waves-effect waves-dark" href="../Views/Pesquisar_consulta.php" aria-expanded="false"><i class="fa fa-reply"></i><span class="hide-menu">Anterior</span></a>
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
                        <h3 class="text-themecolor">Tela de alterção</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item">Consulta</li>
                            <li class="breadcrumb-item active">Alterar</li>
                        </ol>
                    </div>
                    
                </div>
  <br> 

	 <form method="POST" action="../Controller/Alterar_consulta.php">
   <h1 class="text-themecolor">Atualizaçao de registro</h1><br>

  <div class="form-row">
  	<input type="hidden" name="id" value="<?php  echo $row -> id;?>"><br>
  <div class="form-group col-md-5">
      
      <label>Data da consulta:</label>
      <input type="date"  class="form-control" name="data_cons" id="data_cons" placeholder="Nome completo" value="<?php echo $row -> data_cons; ?>" onfocus="this.value='';">
    </div>
   
    <div class="form-group col-md-5">
      <label for="prontuario">Horario:</label>
      <input type="time" class="form-control" rows="3" name="horario" id="horario" value="<?php echo $row -> horario; ?>" required onfocus="this.value='';" >
    </div>
    </div>
   <div class="form-row">
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
    </div>

   <div class="form-row">
    <div class="form-group col-md-3">
        <label>Valor da consulta</label>
    <input type="number" class="form-control" name="valor" id="valor" value="<?php echo $row -> valor; ?>" required onfocus="this.value='';">   
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-5">
  <button type="submit" value="alterar" name="enviar" class="btn btn-primary" >Alterar</button>
  </div>
  </div>
</form>

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
    <script src="../assets/node_modules/jquery/jquery.mask.min.js"></script>
</body>
</html>