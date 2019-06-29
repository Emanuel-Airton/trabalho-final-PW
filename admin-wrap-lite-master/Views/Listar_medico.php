<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
	<link rel="icon" type="image/png" sizes="16x16" href="../assets/images/logo3.png">
    <title>Clinica ADS</title>
	<link href="../assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="../assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <!--c3 CSS -->
    <link href="../assets/node_modules/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <!-- Dashboard 1 Page CSS -->
    <!-- You can change the theme colors from here -->
    <link href="../html/css/colors/default.css" id="theme" rel="stylesheet">

	<link href="../assets/node_modules/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
	<link rel="stylesheet" type="text/css" href="../html/css/style.css">
	
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

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
                    <ul id="sidebarnav"><br>
                        <li> <a class="waves-effect waves-dark" href="../html/index.html" aria-expanded="false"><i class="fa fa-home"></i><span class="hide-menu">Inicio  </span></a>
                        </li>
                       <li> <a class="waves-effect waves-dark" href="../html/paciente.html" aria-expanded="false"><i class="fa fa-reply"></i><span class="hide-menu">Anterior</span></a>
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
  
                    
                </div>

<div align="center"><h2 class="text-themecolor">Relatorio de Medicos</h2></div><br>
<div class="row">
<div class="container">

    <div class="table-active">
    <div class="table-hover table-striped ">
      <table class="table table">


<?php
		if(isset($_GET['msg'])){
			$msg = $_GET['msg'];
			echo "
			<div class='alert alert-success' role='alert'>
				$msg
			</div> ";
		}

		if(isset($_GET['msg_erro'])){
			$msg = $_GET['msg_erro'];
			echo "
			<div class='alert alert-danger' role='alert'>
				$msg
			</div> ";
		}
		//incluindo as funcionalidaes do arquivo mysql_conexao_pdo.php
		include_once '../Model/conexao.php';
		include_once '../Model/MedicoDAO.php';

		//instance of class CategoriaDAO
		$md = new MedicoDAO();

		$result = $md -> listar_medico($conn); 
		echo '
			
				<tr class="table-info">
					<td class> <h4> <b> Id </b> </h4> </td>
					<td> <h4> <b> Nome </b> </h4> </td>
					<td> <h4> <b>Crm</b> </h4> </td>
					<td> <h4> <b>Telefone<b> </h4> </td>
					<td> <h4> <b>Email </b> </h4> </td>
					<td> <h4> <b>Alterar</b> </h4> </td>
					<td> <h4> <b>Excluir</b> </h4> </td>
				</tr> ';

			if ($result) {

				//percorre os resultados via iteração
				while($row = $result->fetch(PDO::FETCH_OBJ)){
					//exibe os resultados, acessando o objeto retornado
					echo '<tr>';
					echo 	'<td>'.$row -> id .'</td>'. 
							'<td>'. $row -> nome_med .'</td>'.
							'<td>'. $row -> crm .'</td>'.
							'<td>'. $row -> telefone .'</td>'.
							'<td>'. $row -> email .'</td>'.
							'<td> <a href="../Views/form_update_medico.php?id='.
							 $row -> id.'"><button class="btn btn-primary btn-custom">
 							<span class="glyphicon glyphicon-pencil"></span>
							</button> </a>'.'</td>'.

							'<td> <a href="../Controller/Deletar_medico.php?id='.
							 $row -> id.'"><button class=" btn btn-danger btn-custom"><span class="glyphicon glyphicon-trash"  onclick=" return confirm('."'Deseja excluir o registro ?'".')"></span></button></a></td>';
				echo '</tr>';
				}
			}
			$conn = null;
		//	echo "</table>";
?>


</div>
</div>
</div>
</div>
</table>
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