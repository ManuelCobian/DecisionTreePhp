
<style type="text/css">
	


.container {
	position: absolute;
	top: 0;
	background: #222;
	color: #fff;
	width: 100%;
	min-height: 100vh;
	display: flex;
}
#recha{
	color: white;
}
#rechazo{
	color: black;
}
.preloader {
	margin: auto;
	
	width:100%;
	height:15px;
	background: rgba(255,255,255,0.1);
	
	position: relative;
}

.preloader:before {
	content: "";
	position: absolute;
	background: green;
	width: 0;
	height: 30px;
	
	animation: preloader 10s infinite;
}

.preloader p {
	margin: 0;
	line-height: 30px;
	font-size: 25px;
	font-weight: bold;
	
	position: absolute;
	left: 50%;
	transform: translateX(-50%);
}

.cerrar {
	transform: translateY(-100%);
	transition: all 0.5s;
}

@keyframes preloader {
	90% {
		width: 100%;
		opacity: 1;
	}
	100% {
		width: 100%;
		opacity: 0;
	}
}
#indicadores{
  table-layout: fixed;
}







 #int{
	width: 100px;
  overflow: auto;
}

</style>



<section class="content" >
	<!-- Main row -->
	
	<div class="row">
		<!-- Left col -->
		<section  id="cuadros" class="col-lg-9 connectedSortable" >

			<div class="row">
			<h1 class="text-center"> <?php echo "Welcome to User Panel"." ";?></h1></center>	
       

       

        

      

			<div class="row">
		
        
		<div class="col-md-12">
			
			<!-- TABLE: LATEST ORDERS -->
			<div class="box box-info">
                <div class="box-header with-border">
					<h3 class="box-title"></h3>
					<div class="box-tools pull-right">
						<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
					</div>
				</div><!-- /.box-header -->
                <div class="box-body">
					
					
						<br>
					 <div id="custom-search-input">
					 	<center>
					 		 <div class="input-group col-md-10">
                                <input type="text" class="  search-query form-control" placeholder="Search..." id="seearch" />
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button" id="searching">
                                        <span class=" glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>

                            <div class="checkbox">

                            	<?php  if (isset($_SESSION['groups'][8])) { ?>
								
								<label>
								
								&nbsp;&nbsp;<input id="search_user" name="confirmo" type="checkbox" value="1" required>Search by User </a>
								
								</label>
							

							<?php } ?>



							<label>
								&nbsp;&nbsp;<input id="search_condition" name="confirmo" type="checkbox" value="1" required>Search by Condition </a>
								
								
								
							</label>


							<label>
								
								&nbsp;&nbsp;<input id="search_text" name="confirmo" type="checkbox" value="1" required>Search by Text </a>
								
							</label>


							
						
							

							</div>


							   
							</div>

					 	</center>
                           
                        </div>

						<br>
					
				
					<table class="table table-bordered table-hover dataTableREOSC" id="datatables">
						<thead>
							<tr >
								<?php  if (isset($_SESSION['groups'][8])) { ?>
								<th><center>Options</center></th>
								<th><center>User</center></th>
								<?php } ?>
								<th><center>Conditions</center></th>
								<th><center>Authorized</center></th>
								<th><center>Text</center></th>
								<th><center>Enable</center></th>
								<th><center>Sinze</center></th>
								
								
							</tr>
							
						</thead>

						<tbody>
							

						<?php 
						

						if (isset($allusers) and is_array($allusers) and count($allusers)) {
							# code...
						 ?>


						 <?php foreach ($allusers as $data) {
						 	# code...
						 ?>

						 	<tr>
						 		
						 		<?php  if (isset($_SESSION['groups'][8])) { ?>
								

								<td>
						 		

						 		
						 		<center>
						 				

						 				<?php if ($data->authorized>=1) {
						 				# code...
						 					$value="Yes";
						 				 ?>

						 				<center><button  id="<?php echo $data->id ?>"  class="btn btn-danger desable" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detalis of User"><i class="fa fa-close"></i>Desable authorize</button></center>

						 				<?php }else{ ?>

						 					<button  id="<?php echo $data->id ?>"  class="btn btn-danger auto" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detalis of User"><i class="fa fa-check"></i> Authorization</button>

						 				<?php } ?>

						 			

						 		</center>

						 		
						 		

						 		</td>

						 		<?php if (isset($data->user->username)) {
						 			# code...
						 		 ?>
								<td><?php echo "<center>".$data->user->username."<center>"; ?></td>
								<?php }else{ ?>
								<td></td>
								<?php } ?>



								<?php } ?>
						 		

						 		<td>

						 			<?php if (isset($data->conditions_campaing) and is_array($data->conditions_campaing)) {
						 				# code...
						 				foreach ($data->conditions_campaing as $key ) {
						 					# code...
						 				
						 			 ?>


						 			<?php echo "<center>".$key->category."<center>"; ?>

						 			<?php } ?>
						 			<?php } ?>	


						 		</td>
						 		
						 		<?php $value="NO"; 
						 				$enable="NO";
						 			if ($data->authorized>=1) {
						 				# code...
						 				$value="Yes";
						 			}

						 			if ($data->enabled>=1) {
						 				# code...
						 				$enable="Yes";
						 			}

						 		?>

						 		

						 		<td><?php echo "<center>".$value."<center>"; ?></td>
						 		<td><?php echo "<center>".$data->text."<center>"; ?></td>
						 		<td><?php echo "<center>".$enable."<center>"; ?></td>	
						 		<td><?php echo "<center>".date('d/m/Y', $data->since)."<center>"; ?></td>


						 	</tr>


						<?php } ?>


						<?php } ?>



						</tbody>



					</table>
				
					
				</div>
				
			</div>
		</div>
		
	</div>



			
		</section><!-- /.Left col -->
		<!-- right col (We are only adding the ID to make the widgets sortable)-->
		<section class="col-lg-3 connectedSortable">
			<!-- Bienvenida -->
			<?php 
					echo "<h3>Welcome</h3>";
				
			?>
			<div class="box box-widget widget-user-2">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div class="widget-user-header bg-aqua-active">
                  <div class="widget-user-image">
                   <img src="<?php echo  BASE_TEMPLATE.'/'.ROOT_USERS."sinfoto.png"; ?>" class="img-circle" alt="Imagen del Usuario" width="50%"> 
                  </div>
                  <h3 class="widget-user-username"><?php echo "Admin" ?></h3>
                  <h5 class="widget-user-desc">Admin</h5>
                </div>
               
              </div>
              <br>
			<!-- Fin Bienvenida -->
			
			<!-- Fin Usuarios -->
			<!-- Calendario -->
			 <!-- Calendar -->
              <!-- Fin Usuarios -->

               <div class="box box-solid bg-green-gradient">
                <div class="box-header">
                 
                  <center>

                  	 <i class="fa fa-calendar"></i>
                  	 <h1 class="box-title">Calendar</h1></center>
                  <!-- tools box -->
                 
                </div><!-- /.box-header -->
               
                <div class="box-body no-padding">
                  <!--The calendar -->
                  <div id="calendar" style="width: 100%"></div>
                </div><!-- /.box-body -->

               
              </div><!-- /.box -->
		
			<!-- Fin Calendario -->
			<!-- chat -->
		
			<!-- fin chat -->
			
		</section><!-- /.Right col -->
	</div><!-- /.row (main row) -->
	 
</section>


			
<!-- /.content -->
<div class="modal fade" id="cargando" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			
			 <div class="container" id="container">
                <div class="preloader">
                    <p>SEARCHING</p>
                </div>
            </div>

		</div>
	</div>
</div