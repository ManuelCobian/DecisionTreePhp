<section class="content-header">
          <h1>
            Twitter Acounts 
            
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?php echo BASE_URL ?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
			<li><a href="#"><i class="fa fa-gears"></i> Administration</a></li>
			<li class="active">    Twitter Acounts </li>
          </ol>
    </section>
	
	 <!-- Main content -->
    <section class="content">
		<div class="row">
		
        
		<div class="col-md-12">
			
			<!-- TABLE: LATEST ORDERS -->
			<div class="box box-info">
                <div class="box-header with-border">
					<h3 class="box-title"><i class="fa fa-twitter"></i>Twitter Acounts</h3>
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

                                <br>




                            </div>

                            
							<div class="checkbox">

							<label>
								<input id="confirmo" name="confirmo" type="checkbox" value="1" required>if You search only influncer check this button</a>.
								<br>
							</label>
							<p>&nbsp;</p>
							</div>
						
						</div>

					 	</center>
                           
                        </div>

						<br>
						
					<table id="datatables" class="table table-bordered table-hover dataTableREOSC">
						<thead>
							<tr >
								<th>Options</th>
								<th><center>Name</center></th>
								
								<th><center>Since</center></th>
								<th><center>Influncer</center></th>
								
								
								
							</tr>
							
						</thead>

						<tbody>
							

						<?php 
						
						
						if (isset($allusers) and is_array($allusers) ) {
							# code...
						 ?>


						 <?php foreach ($allusers as $us) {
						 	# code...
						 		if ($us->id>0) {
						 			# code...
						 		
						 ?>

						 	<tr>
						 		
						 		<td>
						 		

						 		
						 		<center>
						 				<a href="<?php echo BASE_URL.'?controller=public&action=Users_details&id='.$us->id.'' ?>" class="btn btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Detalis of User"><i class="fa fa-eye"></i>Detalis</a>


						 				
						 			

						 		</center>

						 		
						 		

						 		</td>
						 		<td><?php echo "<center>".$us->screen_name."<center>"; ?></td>
						 		
						 		<td><?php echo "<center>".date('d/m/Y', $us->since)."<center>"; ?></td>
						 		<td><?php echo "<center>".$us->influencer."<center>"; ?></td>
						 		
						 		


						 	</tr>


						<?php } } ?>


						<?php } ?>



						</tbody>



					</table>
				
					
				</div>
				
			</div>
		</div>

		<div class="box-footer with-border">
									<p><a href="<?php echo BASE_URL ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i>Back</a></p>
							</div>
		
	</div>

			
		
	</section>