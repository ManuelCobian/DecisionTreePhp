<?php require_once 'config/constants.php';
require_once 'core/ControllerBase.php';
require_once 'core/LoadController.php';

 ?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="THE FLOCK ">
		<meta name="author" content="Empresa Municipal">
		
		<base href="<?php echo BASE_URL ?>">
		<title><?php if(isset($title)) {echo $title;} ?> :FLOCK-User </title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.5 -->
		<link rel="stylesheet" href="<?php echo BASE_TEMPLATE.'/'.'template' ?>/bootstrap/css/bootstrap.min.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="<?php echo BASE_TEMPLATE ?>/font-awesome/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="<?php echo BASE_TEMPLATE; ?>/css/ionicons.min.css">
		<link rel="stylesheet" href="<?php echo BASE_TEMPLATE ?>/css/iconmoon.css">
		<link rel="stylesheet" href="<?php echo BASE_TEMPLATE ?>/fonts/css/gfonts.css">
		
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">

  		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	
    <!-- bootstrap slider -->
    
    <link rel="stylesheet" href="<?php echo BASE_TEMPLATE.'/'.'template' ?>/plugins/bootstrap-slider/slider.css">
		 <!-- fullCalendar 2.2.5-->
		<link rel="stylesheet" href="<?php echo BASE_TEMPLATE.'/'.'template'?>/plugins/fullcalendar/fullcalendar.min.css">
		<link rel="stylesheet" href="<?php echo BASE_TEMPLATE.'/'.'template' ?>/plugins/fullcalendar/fullcalendar.print.css" media="print">
		<!-- jvectormap -->
		<link rel="stylesheet" href="<?php echo BASE_TEMPLATE.'/'.'template' ?>/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
		<!-- DataTables -->
		<link rel="stylesheet" href="<?php echo BASE_TEMPLATE.'/'.'template' ?>/plugins/datatables/dataTables.bootstrap.css">
		<!-- iCheck -->
		  <!-- iCheck for checkboxes and radio inputs -->
		<link rel="stylesheet" href="<?php echo BASE_TEMPLATE.'/'.'template' ?>/plugins/iCheck/all.css">
		
		<link rel="stylesheet" href="<?php echo BASE_TEMPLATE.'/'.'template' ?>/plugins/daterangepicker/daterangepicker-bs3.css">
		
		<!-- bootstrap wysihtml5 - text editor -->
		<link rel="stylesheet" href="<?php echo BASE_TEMPLATE.'/'.'template' ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
		
		
		<!-- iCheck -->
		<link rel="stylesheet" href="<?php echo BASE_TEMPLATE.'/' ?>css/dropzone.css">
		
		<link rel="stylesheet" href="<?php echo BASE_TEMPLATE.'/' ?>css/star-rating.min.css" media="all" type="text/css"/>
		<link rel="stylesheet" href="<?php echo BASE_TEMPLATE.'/' ?>js/themes/krajee-fa/theme.css" media="all" type="text/css"/>
		<!-- Select2 -->
		<link rel="stylesheet" href="<?php echo BASE_TEMPLATE.'/'.'template' ?>/plugins/select2/select2.min.css">
		
		
		 
		 <!-- Theme style -->
		<link rel="stylesheet" href="<?php echo  BASE_TEMPLATE.'/'.'template' ?>/dist/css/AdminLTE.min.css">
		
		<link rel="stylesheet" href="<?php echo  BASE_TEMPLATE.'/' ?>css/bootstrap-datetimepicker.min.css">
		<link rel="stylesheet" href="<?php echo  BASE_TEMPLATE.'/'.'template' ?>/plugins/datepicker/datepicker3.css">
		<!-- AdminLTE Skins. Choose a skin from the css/skins
		folder instead of downloading all of them to reduce the load. -->
		<link rel="stylesheet" href="<?php echo  BASE_TEMPLATE.'/'.'template' ?>/dist/css/skins/_all-skins.min.css">
		
		
			<!-- Ion Slider -->
    <link rel="stylesheet" href="<?php echo BASE_TEMPLATE.'/'?>css/ion/ion.rangeSlider.css">
	 <!-- ion slider Nice -->
    <link rel="stylesheet" href="<?php echo  BASE_TEMPLATE.'/' ?>css/ion/ion.rangeSlider.skinNice.css">
   
	
		
		<?php
			/*
			if(isset($leafmapcss)){
				echo $leafmapcss;
			}
			*/

			
			echo '<link rel="stylesheet" href="'.BASE_TEMPLATE.'/'."css/leaflet.css".'"/> <link rel="stylesheet" href="'.BASE_TEMPLATE.'/'."css/leafmap.css".'"/>';
			
			
			
		?>
		
		<link rel="stylesheet" href="<?php echo BASE_TEMPLATE.'/'; ?>css/leaflet-panel-layers.min.css" />
		<link rel="stylesheet" href="<?php echo BASE_TEMPLATE.'/' ?>css/Control.FullScreen.css" />
		<link rel="stylesheet" href="<?php echo BASE_TEMPLATE.'/' ?>css/leaflet-sidebar.css" />
		
		
		<?php 
			if(isset($grid)){
			foreach($grid->css_files as $file): ?>
			<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
			<?php endforeach; 
				
				
			}?>
		


		<style>
		/* Paste this css to your style sheet file or under head tag */
		/* This only works with JavaScript, 
		if it's not present, don't show loader */
		.no-js #loader { display: none;  }
		.js #loader { display: block; position: absolute; left: 100px; top: 0; }
		.se-pre-con {
			position: fixed;
			left: 0px;
			top: 0px;
			width: 100%;
			height: 100%;
			z-index: 9999;
			background: url(<?php echo BASE_TEMPLATE.'/img'; ?>/loader-64x/Preloader_1.gif) center no-repeat #fff;
		}
		</style>	
			
		<!-- jQuery 2.1.4 -->
		<script src="<?php echo BASE_TEMPLATE.'/'.'template' ?>/plugins/jQuery/jQuery-2.1.4.min.js"></script>
		
		<script>
	//paste this code under head tag or in a seperate js file.
	// Wait for window load
/*

	$(".btn").mouseup(function(){
      $(".se-pre-con").show();
});
*/
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
</script>
		
			<?php if(isset($jqueryui) ) { if( $jqueryui){ 
			echo '<script src="'.base_url().'js/jquery-ui.min.js"></script>';
			//echo '<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>';
			echo " <script>
			  $.widget.bridge('uibutton', $.ui.button);
			</script>";
			} }  ?>
			
		<!-- Bootstrap 3.3.5 -->
		<script src="<?php echo BASE_TEMPLATE.'/'.'template' ?>/bootstrap/js/bootstrap.min.js"></script>
		<!-- FastClick -->
		<script src="<?php echo BASE_TEMPLATE.'/'.'template' ?>/plugins/fastclick/fastclick.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" ></script>
		
		
		
		<!--SCRIPT PRINCIPAL DEL CHAT -->
			
			<script type="text/javascript">
				//var base_url = "<?php echo BASE_TEMPLATE.'/'; ?>";
				
			</script>
			
			
	<?php
			/*if(isset($leafmapjs)){
				echo $leafmapjs;
			}
			*/
			echo '<script src="'. BASE_TEMPLATE.'/'."js/leaflet.js".'"></script>';
		?>
			
			
			<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
			<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
			<!--[if lt IE 9]>
				
			<![endif]-->

			<?php 

			/*$this->view($js_inicio, array(
					"allusers" => $allusers,
					"Hola" => "videoEjemplo de MVC",
					));*/


				/*$this->view($scripts_inicio, array(
					"allusers" => $allusers,
					"Hola" => "videoEjemplo de MVC",
					));*/

				/*$this->view($scripts_inicio, array(
					"allusers" => $allusers,
					"Hola" => "videoEjemplo de MVC",
					));*/

			 ?>
			<!--<?php if(isset($js_inicio)) { if(is_array($js_inicio)) { foreach($js_inicio as $scr){  echo $scr; } }else{ echo $js_inicio; } } ?>
			
			
			
			<?php if(isset($scripts_inicio)) { if(is_array($scripts_inicio)) { foreach($scripts_inicio as $scr){  $this->load->view($scr); } }else{ $this->load->view($scripts_inicio); } } ?>-->
			
			
				<!-- Sparkline -->
			<script src="<?php echo BASE_TEMPLATE.'/'.'template' ?>/plugins/sparkline/jquery.sparkline.min.js"></script>
			
			
			

	</head>
	<body class="hold-transition skin-black-light sidebar-mini fixed  <?php if(isset($contraer) and $contraer==TRUE){ echo "sidebar-collapse"; } ?>">
	
	<!-- Paste this code after body tag -->
	<div class="se-pre-con"></div>
	<!-- Ends -->
	
		<div class="wrapper">
			
			<header class="main-header">
				
				<!-- Logo -->
				<a href="<?php echo BASE_URL.'?controller=public&action=index' ?>" class="logo">
					
					<!-- mini logo for sidebar mini 50x50 pixels -->
					<span class="logo-mini"><b>Flo</b>ck</span>
					<!-- logo for regular state and mobile devices -->
					<span class="logo-lg"><b>The</b>Flock</span>
					
				</a>
				
				<!-- Header Navbar: style can be found in header.less -->
				<nav class="navbar navbar-static-top" role="navigation">
					<!-- Sidebar toggle button-->
					<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
						<span class="sr-only">Cambiar navegacion</span>
					</a>
					
					
					
					
					<!-- Navbar Right Menu -->
					<div class="navbar-custom-menu">
						<ul class="nav navbar-nav">
							
							<li class="dropdown messages-menu">
								<a href="<?php echo BASE_TEMPLATE.'/'.'app' ?>"  class="dropdown-toggle" data-toggle="dropdown">

									
									<span class="hidden-sm hidden-xs"><?php echo "Flock User"?></span>
									
									
								</a>
							</li>


							
						
							<!-- Notifications: style can be found in dropdown.less -->
							<li class="dropdown notifications-menu">
								
								<ul class="dropdown-menu">
									<li class="header" id="ver"></li>
									<li>
										<!-- inner menu: contains the actual data -->
										<ul id="lista" class="menu">
											
											 
					                      </li>
											
										</ul>
									</li>
									
								</ul>
							</li>
						
							<li class="dropdown messages-menu">
								
							</li>
							
							<!-- User Account: style can be found in dropdown.less -->
							<li class="dropdown user user-menu">
							
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">

									<img src="<?php echo  BASE_TEMPLATE.'/'.ROOT_USERS."sinfoto.png"; ?>" class="user-image" alt="Imagen del Usuario">
									<span class="hidden-xs"><?php echo "";//$user->nom.$user->app; ?></span>
								</a>
								<ul class="dropdown-menu">
									<!-- User image -->
									<li class="user-header">
										<img src="<?php echo  BASE_TEMPLATE.'/'.ROOT_USERS.'sinfoto.png' ;   ?>" class="img-circle" alt="Imagen del Usuario">

										
										<p>
											
											<?php echo "Administrador" ?> 
											
										</p>

										<p>
											<?php 
												# code...
											 ?>
											<?php echo $_SESSION['user_name']; ?> 
											
										</p>

										
									</li>
									
									
									<!-- Menu Footer-->
									<li class="user-footer">
										<div class="pull-left">



											<a href="<?php echo BASE_TEMPLATE."/"; ?>" class="btn btn-success btn-flat">Perfil</a>
										


										</div>
										<div class="pull-right">
											<a href="<?php echo BASE_TEMPLATE."/"; ?>" class="btn btn-danger btn-flat">Log Out</a>
										</div>
									</li>
								</ul>
							</li>
							<!-- Control Sidebar Toggle Button -->
							<li>
								<a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
							</li>
						</ul>
					</div>
					
				</nav>
			</header>
			<!-- Left side column. contains the logo and sidebar -->
			<aside class="main-sidebar">
				<!-- sidebar: style can be found in sidebar.less -->
				<section class="sidebar">
					<!-- Sidebar user panel -->
					<div class="user-panel">
						<div class="pull-left image">

							<img src="<?php  echo BASE_TEMPLATE.'/'.ROOT_USERS.'sinfoto.png' ;//base_url(RUTA_USUARIOS."sinfoto.png");  ?>" class="user-image" alt="Imagen del Usuario">


							
						</div>
						<div class="pull-left info">
							<p><?php echo $_SESSION['user_name']; ?></p>
							<a href="<?php echo BASE_URL ?>"><i class="fa fa-circle text-success"></i>Online</a>
						</div>
					</div>
					<!-- search form -->
					<?php
						$attributes = array('class' => 'sidebar-form');
						//echo form_open('admin/buscar', $attributes);
					?>
					
					<!-- search form <div class="input-group">
						<input type="text" name="q" class="form-control" placeholder="Search...">
						<span class="input-group-btn">
							<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
						</span>
					</div>-->
					
					<?php
						//echo form_close();
					?>
					<!-- /.search form -->
					<!-- sidebar menu: : style can be found in sidebar.less -->
					<ul class="sidebar-menu">
						<li class="header">Main Menu</li>
						<li class="active">
							<a href="<?php echo BASE_URL ?>">
								<i class="fa fa-home"></i> <span>Dashboard</span>
								
							</a>
						</li>




						
							
						


						
						
						
						<?php if(isset($leyenda)){
						
							echo $leyenda;
						}?>
						
						
					</ul>
				</section>
				
				<!-- /.sidebar -->
			</aside>
			
			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
				
				
				<?php 

				
					if(isset($pagina)) { 
					$this->view($pagina,array(
            		"allusers"=>$allusers,
            		"carpeta"=>$carpeta,
            		"pagina_interna"=>$pagina_interna,
            		'scripts'=>$scripts
            		//"Hola"    =>"Soy Víctor Robles"
        			));

        			} 

				?>
				
			</div><!-- /.content-wrapper -->
			
		
			
			<!-- Control Sidebar -->
			<aside class="control-sidebar control-sidebar-dark">
				<!-- Create the tabs -->
				<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
					<li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
					<li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<!-- Home tab content -->
					<div class="tab-pane" id="control-sidebar-home-tab">
						<h3 class="control-sidebar-heading">Actividad Reciente</h3>
						<ul class="control-sidebar-menu">
							<li>
								<a href="javascript::;">
									<i class="menu-icon fa fa-check bg-red"></i>
									<div class="menu-info">
										<h4 class="control-sidebar-subheading">Sin actividad reciente</h4>
										<p><?php echo date('d M Y'); ?></p>
									</div>
								</a>
							</li>
							
						</ul><!-- /.control-sidebar-menu -->
						
						<h3 class="control-sidebar-heading">Progreso en las Tareas</h3>
						<ul class="control-sidebar-menu">
							<li>
								<a href="javascript::;">
									<h4 class="control-sidebar-subheading">
										Captura de propuestas
										<span class="label label-danger pull-right">0%</span>
									</h4>
									<div class="progress progress-xxs">
										<div class="progress-bar progress-bar-danger" style="width: 0%"></div>
									</div>
								</a>
							</li>
							
							
						</ul><!-- /.control-sidebar-menu -->
						
					</div><!-- /.tab-pane -->
					
					<!-- Settings tab content -->
					<div class="tab-pane" id="control-sidebar-settings-tab">
						<form method="post">
							<h3 class="control-sidebar-heading">Preferencias Generales</h3>
							<div class="form-group">
								<label class="control-sidebar-subheading">
									Mostrar Chat
									<input type="checkbox" class="pull-right" checked>
								</label>
								<p>
									Mostrar u ocultar la ventana de chat en el Tablero.
								</p>
							</div><!-- /.form-group -->
							
							<div class="form-group">
								<label class="control-sidebar-subheading">
									Autoguardar mensajes enviados
									<input type="checkbox" class="pull-right" checked>
								</label>
								<p>
									Guarda un historial de los mensajes enviados.
								</p>
							</div><!-- /.form-group -->
							
							<div class="form-group">
								<label class="control-sidebar-subheading">
									Mostrar el nombre del autor en los mensajes
									<input type="checkbox" class="pull-right" checked>
								</label>
								<p>
									Permitir al usuario mostrar su nombre en los mensajes.
								</p>
							</div><!-- /.form-group -->
							
							<h3 class="control-sidebar-heading">Preferencias del Chat</h3>
							
							<div class="form-group">
								<label class="control-sidebar-subheading">
									Mostrarme como En Linea
									<input type="checkbox" class="pull-right" checked>
								</label>
							</div><!-- /.form-group -->
							
							<div class="form-group">
								<label class="control-sidebar-subheading">
									Apagar las notificaciones
									<input type="checkbox" class="pull-right">
								</label>
							</div><!-- /.form-group -->
							
							<div class="form-group">
								<label class="control-sidebar-subheading">
									Eliminar el historial del chat
									<a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
								</label>
							</div><!-- /.form-group -->
						</form>
					</div><!-- /.tab-pane -->
				</div>
			</aside><!-- /.control-sidebar -->
			<!-- Add the sidebar's background. This div must be placed
			immediately after the control sidebar -->
			<div class="control-sidebar-bg"></div>
			
		</div><!-- ./wrapper -->
		
		
		
		
		
			
		
			
		
			<!-- jvectormap -->
			<script src="<?php echo BASE_TEMPLATE.'/'.'template' ?>/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
			<script src="<?php echo BASE_TEMPLATE.'/'.'template' ?>/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
			<!-- DataTables -->
			<script src="<?php echo BASE_TEMPLATE.'/'.'template' ?>/plugins/datatables/jquery.dataTables.min.js"></script>
			<script src="<?php echo BASE_TEMPLATE.'/'.'template' ?>/plugins/datatables/dataTables.bootstrap.min.js"></script>

			<!-- Select2 -->
			<script src="<?php echo BASE_TEMPLATE.'/'.'template' ?>/plugins/select2/select2.full.min.js"></script>
			<!-- FastClick -->
			<script src="<?php echo BASE_TEMPLATE.'/'.'template' ?>/plugins/fastclick/fastclick.min.js"></script>
			<!-- SlimScroll 1.3.0 -->
			<script src="<?php echo BASE_TEMPLATE.'/'.'template' ?>/plugins/slimScroll/jquery.slimscroll.min.js"></script>
			
			<!-- iCheck 1.0.1 -->
			<script src="<?php echo BASE_TEMPLATE.'/'.'template' ?>/plugins/iCheck/icheck.min.js"></script>
			<!-- ChartJS 1.0.1 -->
			<script src="<?php echo BASE_TEMPLATE.'/'.'template' ?>/plugins/chartjs/Chart.min.js"></script>
			<!-- <script src="https://cdn.ckeditor.com/4.4.3/standard/ckeditor.js"></script> -->
			<!-- Bootstrap WYSIHTML5 -->
			<script src="<?php echo BASE_TEMPLATE.'/'.'template' ?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
			
			<!-- InputMask -->
			<script src="<?php echo BASE_TEMPLATE.'/'.'template' ?>/plugins/input-mask/jquery.inputmask.js"></script>
			<script src="<?php echo BASE_TEMPLATE.'/'.'template' ?>/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
			<script src="<?php echo BASE_TEMPLATE.'/'.'template' ?>/plugins/input-mask/jquery.inputmask.extensions.js"></script>
			
			<script src="<?php echo BASE_TEMPLATE.'/' ?>js/dropzone.js"></script>
			
			
			
			<script src="<?php echo  BASE_TEMPLATE.'/' ?>js/star-rating.min.js" type="text/javascript"></script>
			<script src="<?php echo  BASE_TEMPLATE.'/' ?>js/themes/krajee-fa/theme.js" type="text/javascript"></script>
			<script src="<?php echo  BASE_TEMPLATE.'/' ?>js/locales/es.js"></script>
			
			<!-- fullCalendar 2.2.5 -->
			<script src="<?php echo  BASE_TEMPLATE.'/' ?>js/moment.min.js"></script>
			<script src="<?php echo BASE_TEMPLATE.'/'.'template' ?>/plugins/fullcalendar/fullcalendar.min.js"></script>
			<script src="<?php echo  BASE_TEMPLATE.'/'.'template' ?>/plugins/daterangepicker/daterangepicker.js"></script>
			
			<script src="<?php echo  BASE_TEMPLATE.'/'.'template' ?>/plugins/knob/jquery.knob.js"></script>
			<!-- Chained Selects-->
			<script src="<?php echo  BASE_TEMPLATE.'/'; ?>js/jquery.chainedSelects.js"></script>
			
			<script src="<?php echo  BASE_TEMPLATE.'/' ?>js/bootstrap-datetimepicker.min.js"></script>
			
			<!-- datepicker -->
			<script src="<?php echo BASE_TEMPLATE.'/'.'template' ?>/plugins/datepicker/bootstrap-datepicker.js"></script>
			
			<script type="text/javascript" src="<?php echo BASE_TEMPLATE.'/'.'template' ?>/plugins/datepicker/locales/bootstrap-datepicker.es.js" charset="UTF-8"></script>
				
			<!-- AdminLTE App -->
			<script src="<?php echo BASE_TEMPLATE.'/'.'template' ?>/dist/js/app.min.js"></script>
			<!-- AdminLTE for demo purposes -->
			<script src="<?php echo BASE_TEMPLATE.'/'.'template' ?>/dist/js/demo.js"></script>
			<script src="<?php echo BASE_TEMPLATE.'/' ?>js/leaflet-panel-layers.min.js"></script>
			<script src="<?php echo BASE_TEMPLATE.'/' ?>js/Control.FullScreen.js"></script>
			<script src="<?php echo BASE_TEMPLATE.'/' ?>js/leaflet-sidebar.js"></script>
			 <!-- Ion Slider -->
    <script src="<?php echo BASE_TEMPLATE.'/' ?>js/ion.rangeSlider.min.js"></script>
    <!-- Bootstrap slider -->
    <script src="<?php echo BASE_TEMPLATE.'/'.'template' ?>/plugins/bootstrap-slider/bootstrap-slider.js"></script>

		<script src="<?php echo BASE_TEMPLATE.'/' ?>js/macy.js" type="text/javascript"></script>
	
		
	
			<?php 
			if(isset($grid)){
				
			foreach($grid->js_files as $file): ?>
			<script src="<?php echo $file; ?>"></script>
			<?php endforeach; 
				
			}?>


			
			 <script>
				 $(function () {
					/* BOOTSTRAP SLIDER */
					$('.slider').slider();

					/* ION SLIDER */
					$("#range_1").ionRangeSlider({
					  min: 0,
					  max: 5000,
					  from: 1000,
					  to: 4000,
					  type: 'double',
					  step: 1,
					  prefix: "$",
					  prettify: false,
					  hasGrid: true
					});
					$(".range").ionRangeSlider();
				});
			</script>
			<script>
				$(function () {
					//Add text editor
					//$("#compose-textarea").wysihtml5();
					
					//Initialize Select2 Elements
					$(".select2").select2();
				});
			</script>
			
			<script>
				$(function () {
					
					
					//INITIALIZE SPARKLINE CHARTS
					$(".sparkline").each(function () {
						var $this = $(this);
						$this.sparkline('html', $this.data());
					});
					
					
					$(".sparklinecomposite").each(function () {
						var $this = $(this);
						$this.sparkline('html', $this.data(),{composite:true, changeRangeMin: 0, chartRangeMax: 100} );
						$this.sparkline('html', $this.data('values2'),{composite:true, changeRangeMin: 0, chartRangeMax: 100} );
					});
					
				
					
					/* SPARKLINE DOCUMENTAION EXAMPLES http://omnipotent.net/jquery.sparkline/#s-about */
					drawDocSparklines();
					
					
				});
				function drawDocSparklines() {
					
					// Bar + line composite charts
					$('#compositebar').sparkline('html', {type: 'bar', barColor: '#aaf'});
					$('#compositebar').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
					{composite: true, fillColor: false, lineColor: 'red'});
					
					
					// Line charts taking their values from the tag
					$('.sparkline-1').sparkline();
					
					// Draw a sparkline for the #sparkline element
					$('.sparkceieg').sparkline({
						type: "line",
						// Map the offset in the list of values to a name to use in the tooltip
						tooltipFormat: '{{offset:offset}} {{value}}',
						tooltipValueLookups: {
							'offset': {
								0: 'Ene',
								1: 'Feb',
								2: 'Mar',
								3: 'Abr',
								4: 'May',
								5: 'Jun',
								6: 'Jul',
								7: 'Ago',
								8: 'Sep',
								9: 'Oct',
								10: 'Nov',
								11: 'Dic',
							}
						},
					});
					
					// Larger line charts for the docs
					$('.largeline').sparkline('html',
					{type: 'line', height: '2.5em', width: '4em'});
					
					// Customized line chart
					$('#linecustom').sparkline('html',
					{height: '1.5em', width: '8em', lineColor: '#f00', fillColor: '#ffa',
					minSpotColor: false, maxSpotColor: false, spotColor: '#77f', spotRadius: 3});
					
					// Bar charts using inline values
					$('.sparkbar').sparkline('html', {type: 'bar'});
					
					$('.barformat').sparkline([1, 3, 5, 3, 8], {
						type: 'bar',
						tooltipFormat: '{{value:levels}} - {{value}}',
						tooltipValueLookups: {
							levels: $.range_map({':2': 'Low', '3:6': 'Medium', '7:': 'High'})
						}
					});
					
					// Tri-state charts using inline values
					$('.sparktristate').sparkline('html', {type: 'tristate'});
					$('.sparktristatecols').sparkline('html',
					{type: 'tristate', colorMap: {'-2': '#fa7', '2': '#44f'}});
					
					// Composite line charts, the second using values supplied via javascript
					$('#compositeline').sparkline('html', {fillColor: false, changeRangeMin: 0, chartRangeMax: 10});
					$('#compositeline').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
					{composite: true, fillColor: false, lineColor: 'red', changeRangeMin: 0, chartRangeMax: 10});
					
					// Line charts with normal range marker
					$('#normalline').sparkline('html',
					{fillColor: false, normalRangeMin: -1, normalRangeMax: 8});
					$('#normalExample').sparkline('html',
					{fillColor: false, normalRangeMin: 80, normalRangeMax: 95, normalRangeColor: '#4f4'});
					
					// Discrete charts
					$('.discrete1').sparkline('html',
					{type: 'discrete', lineColor: 'blue', xwidth: 18});
					$('#discrete2').sparkline('html',
					{type: 'discrete', lineColor: 'blue', thresholdColor: 'red', thresholdValue: 4});
					
					// Bullet charts
					$('.sparkbullet').sparkline('html', {type: 'bullet'});
					
					// Pie charts
					$('.sparkpie').sparkline('html', {type: 'pie', height: '1.0em', sliceColors: ['#009900','#ffdb00','#ff9900','#109618','#66aa00','#dd4477','#0099c6','#990099 ']});
					
					// Box plots
					$('.sparkboxplot').sparkline('html', {type: 'box'});
					$('.sparkboxplotraw').sparkline([1, 3, 5, 8, 10, 15, 18],
					{type: 'box', raw: true, showOutliers: true, target: 6});
					
					// Box plot with specific field order
					$('.boxfieldorder').sparkline('html', {
						type: 'box',
						tooltipFormatFieldlist: ['med', 'lq', 'uq'],
						tooltipFormatFieldlistKey: 'field'
					});
					
					// click event demo sparkline
					$('.clickdemo').sparkline();
					$('.clickdemo').bind('sparklineClick', function (ev) {
						var sparkline = ev.sparklines[0],
						region = sparkline.getCurrentRegionFields();
						value = region.y;
						alert("Clicked on x=" + region.x + " y=" + region.y);
					});
					
					// mouseover event demo sparkline
					$('.mouseoverdemo').sparkline();
					$('.mouseoverdemo').bind('sparklineRegionChange', function (ev) {
						var sparkline = ev.sparklines[0],
						region = sparkline.getCurrentRegionFields();
						value = region.y;
						$('.mouseoverregion').text("x=" + region.x + " y=" + region.y);
						}).bind('mouseleave', function () {
						$('.mouseoverregion').text('');
					});
				}
				
				
				
			</script>
			<?php
				if(isset($dropzone)){
				?>
				<script>
					$(document).ready(function(){
						
						
						
						function addInput(divName, Valor){
							
							var newdiv = document.createElement('div');
							newdiv.innerHTML = '<input type="hidden" name="archivos[]" value="' + Valor +'">';
							document.getElementById(divName).appendChild(newdiv);
							
							
						}
						
						var myDropzone = null;
						// Get the template HTML and remove it from the document
						var previewNode = document.querySelector("#template");
						previewNode.id = "";
						var previewTemplate = previewNode.parentNode.innerHTML;
						previewNode.parentNode.removeChild(previewNode);
						
						Dropzone.options.adjuntos = {
						<?php if(isset($dropzone_evalua)){ ?>
							url: "<?php echo base_url('evalua/upload'); ?>",
						<?php }else{ ?>
							url: "<?php echo base_url('mensajes/upload'); ?>",
						<?php } ?>
							//paramName: "file", // The name that will be used to transfer the file
							thumbnailWidth: 80,
							thumbnailHeight: 80,
							autoProcessQueue: false,
							//addRemoveLinks: true,
							parallelUploads: 100,
							maxFiles: 100,
							uploadMultiple: true,
							previewTemplate: previewTemplate,

							renameFilename: function (filename) {
            return filename.replace(/[^\w_.]/gi, '');
        },
							
							//autoQueue: true, // Make sure the files aren't queued until manually added
							previewsContainer: "#previews", // Define the container to display the previews
							
							// The configuration we've talked about above
							
							
							// The setting up of the dropzone
							init: function() {
								myDropzone = this;
								
								
								
								// Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
								// of the sending event because uploadMultiple is set to true.
								//this.on("sendingmultiple", function() {
								// Gets triggered when the form is actually being sent.
								// Hide the success button or the complete form.
								//});
								this.on("successmultiple", function(files, response) {
									//window.location='<?php echo base_url('mensajes/escribir'); ?>';
									//exit();
									document.frmAdj.submit();
								});
								this.on("errormultiple", function(files, response) {
									$("#notificaciones").before('<div class="alert alert-error" id="alert-error"><button type="button" class="close" data-dismiss="alert">x</button><i class="icon-exclamation-sign"></i> There is a problem with the files being uploaded. Please check the form below.</div>');
									exit();
								});
								
								this.on("sendingmultiple", function(file, xhr, formData) {
									//Enviamos los nombres de los archivos por POST data.
									var form = $(this).closest('#frmAdj');
									var i= 0;
									for (i = 0; i < file.length; ++i) {
										addInput('archs', file[i].name);
										
										console.log('<input type="hidden" name="archivos_'+i+'" value="' + file[i].name +'">');
									}
									
									
								});
							}
							
							
							
							
							
						}
						
						
						
						$('button[type="submit"]').on("click", function (e) {
							
							e.preventDefault();
							e.stopPropagation();
							
							var form = $(this).closest('#frmAdj');
							//if (form.valid() == true) { 
							if (myDropzone.getQueuedFiles().length > 0) {                        
								myDropzone.processQueue();  
								
								} else {                       
								myDropzone.uploadFiles([ ]); //send empty 
							}                                    
							//}               
						});
						
						
						
						
						$('#btnborrador').click(function(){
							var form = $(this).closest('#frmAdj');
							$('#frmAdj').append('<input type="hidden" name="borrador" value="1" /> ');
							return true;
						});
						
						
						$(function () {
							$('[data-toggle="tooltip"]').tooltip()
						})
						
						
						
						
					});
				</script>
				<?php
				}
			?>
			
			
			
			
			
	<script>
		$(document).on('ready', function () {
			$('.kv-fa').rating({
				step: 1,
				showCaption: false,
				theme: 'krajee-fa',
				filledStar: '<i class="fa fa-star"></i>',
				emptyStar: '<i class="fa fa-star-o"></i>'
			});
		});
	</script>
			<?php if(isset($map)){ ?>
				<script type="text/javascript">
					var centreGot = true;
					var marker;
				</script>
				
				<?php
				echo $map['js']; 
				}
				
			?>
			
				<script>
				$(function () {

					


					$(".dataTable").DataTable( { "order": [[ 2, "desc" ]]    });
					var table=$(".dataTableREOSC").DataTable( { "order": [[ 1, "asc" ]] ,"searching": false,"language":{
					    "sEmptyTable":     "No data available in table",
					    "sInfo":           "Showing _START_ to _END_ of _TOTAL_ entries",
					    "sInfoEmpty":      "Showing 0 to 0 of 0 entries",
					    "sInfoFiltered":   "(filtered from _MAX_ total entries)",
					    "sInfoPostFix":    "",
					    "sInfoThousands":  ",",
					    "sLengthMenu":     "Show _MENU_ entries",
					    "sLoadingRecords": "Loading...",
					    "sProcessing":     "Processing...",
					    "sSearch":         "Search:",
					    "sZeroRecords":    "No matching records found",
					    "oPaginate": {
					        "sFirst":    "First",
					        "sLast":     "Last",
					        "sNext":     "Next",
					        "sPrevious": "Previous"
					    },
					    "oAria": {
					        "sSortAscending":  ": activate to sort column ascending",
					        "sSortDescending": ": activate to sort column descending"
					    },
					     "dom": 'lrtip'
					}
		   			});


					$(".dataTableMIR").DataTable( { "aaSorting": [], "iDisplayLength": 100 });
					$(".dataTableNormal").DataTable( { "aaSorting": [], "iDisplayLength": 10 });
					$(".dataTableMSG").DataTable( { "order": [[ 5, "desc" ]]    });
					$('#tdatatable').DataTable({
						"paging": true,
						"lengthChange": false,
						"searching": false,
						"ordering": true,
						"info": true,
						"searching": false,
						"autoWidth": false,
						"language": {
			            "lengthMenu": "Display _MENU_ records per page",
			            "zeroRecords": "Nothing found - sorry",
			            "info": "Showing page _PAGE_ of _PAGES_",
			            "infoEmpty": "No records available",
			            "infoFiltered": "(filtered from _MAX_ total records)"
        				},"Paginate": {
                    "sFirst":    "First",
                    "sLast":     "Last",
                    "sNext":     "Next",
                    "sPrevious": "Previous"
                },
					});
				});
				
				
				$("[dinero]").inputmask('$ 999,999,999,999.99', { numericInput: true });
			</script>
			
			<script>
				$(function () {
					// Replace the <textarea id="editor1"> with a CKEditor
					// instance, using default configuration.
					
					//bootstrap WYSIHTML5 - text editor
					$(".editor").wysihtml5();
				});
			</script>
			
			<!-- ################################################################## -->
			
			<script language="JavaScript" type="text/javascript">
				$(function()
				{
					$('#txtEdo').chainSelect('#txtMun','<?php echo BASE_URL ?>',
					{ 
						before:function (target) //before request hide the target combobox and display the loading message
						{ 
							$("#loading").css("display","block");
							$(target).css("display","none");
							
						},
						after:function (target) //after request show the target combobox and hide the loading message
						{ 
							$("#loading").css("display","none");
							$(target).css("display","block");
							
							
						}
					});
					$('#txtMun').chainSelect('#txtLoc','<?php echo BASE_URL ?>',
					{ 
						before:function (target) 
						{ 
							$("#loading").css("display","block");
							$(target).css("display","none");
							
						},
						after:function (target) 
						{ 
							$("#loading").css("display","none");
							$(target).css("display","block");
							
						}
					});
					$('#ttema').chainSelect('#tsubtema','<?php echo BASE_URL ?>',
					{ 
						before:function (target) 
						{ 
							$("#loading").css("display","block");
							$(target).css("display","none");
							
						},
						after:function (target) 
						{ 
							$("#loading").css("display","none");
							$(target).css("display","block");
							
						}
					});
				});
				
				
				 //Flat red color scheme for iCheck
				$('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
				  checkboxClass: 'icheckbox_flat-green',
				  radioClass: 'iradio_flat-green'
				});
				
				
				
			</script>
			
	<?php 
	/*
	if($perm = $this->users->tiene_permiso( $usr->id, MOD_CEIEG )) { ?>
			<script type="text/javascript">

			



		function coment(){
				  
			$.ajax({
		        url:'<?php echo base_url('ceieg/ver_comentario') ?>',
		        type:'POST',
		        success:function (data) {

		        	
			        	
			            $('#lista').html(data);
		        	
		        	
		        }
		    });

		}

		function total(){

			$.ajax({
		        url:'<?php echo base_url('ceieg/count_comentarios') ?>',
		        type:'POST',
		        success:function (data) {
		           
		        	if(data!=0){

		        		$('#ver').html("Tienes"+" "+data+" "+"Notificaciones");

		             $('#num').html(data);

		        	}else{

		        		$('#ver').hide();

		             $('#num').hide();
		        }
		            
		        }
		    });
		}
			setTimeout(total,10000);

			setTimeout(coment,10000);
		</script>
			
		<?php } */ ?>	
		
		<?php 
				# code...

				// $this->load->view("admin/chat");

			

			 ?>
			 

			<?php 

			
				if (isset($scripts) and is_array($scripts)) {
							
							foreach ($scripts as $src) {
								# code...
								$this->view($src,array(
	            		
	        					));
							}
				}
				else if (isset($scripts)){
					$this->view($scripts,array(
            		
        			));
				}
					


        			


			 ?>
			
			
			
			<!-- VISTA QUE CARGA EL CHAT DESDE EL INICIO-->
			
		
	</body>
</html>
