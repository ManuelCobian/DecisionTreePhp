<?php 

	$information=json_decode($allusers->payload, true);



//var_dump($information);


 ?>

<section class="content">
	<!-- Info boxes -->
	<div class="box box-success ">
		<div class="box-header with-border">
		
			
			  	
       
			
			<div class="box-tools pull-right">
				<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
			</div><!-- /.box-tools -->
		</div><!-- /.box-header -->
		<div class="box-body">
			
			<div class="row">
				
				<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1><?php echo "Information  of "." ".$allusers->screen_name ?></h1></div>
    	
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">

      	<?php if ($information["profile_image_url_https"]!="") {
      		# code...
      	?>
        <img src="<?php echo  $information["profile_image_url_https"]; ?>" class="avatar img-circle img-thumbnail" alt="avatar" width="50%">
    	<?php }else{ ?>

    		<img src="<?php echo  BASE_TEMPLATE.'/'.ROOT_USERS."sinfoto.png"; ?>" class="avatar img-circle img-thumbnail" alt="avatar" width="50%">
    	<?php } ?>
        
      </div></hr><br>

          

            	
            	<ul class="list-group">

            <li class="list-group-item text-right"><span class="pull-left"><strong><i class="fa fa-twitter"></i> Twitter</strong></span><a href="<?php echo  $information; ?>"><?php echo "@".$information["name"]  ?></a></li>		
          	
            <li class="list-group-item text-right"><span class="pull-left"><strong>Follower</strong></span><?php echo $information["followers_count"]; ?></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Friends</strong></span><?php echo $information["friends_count"]; ?></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Favorites</strong></span><?php echo $information["favourites_count"]; ?></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>List</strong></span><?php echo $information["listed_count"]; ?></li>
          	</ul> 




          
          
          <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Follower</strong></span><?php echo $allusers->follower->total; ?></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Followed</strong></span><?php echo $allusers->followed->total; ?></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Boots</strong></span><?php echo $allusers->bots->total; ?></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Apps</strong></span>1</li>
          </ul> 
               
         
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Information</a></li>
             
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="Name." value="<?php echo $information["name"];  ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Screen name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any."  value="<?php echo $allusers->screen_name;  ?>">
                          </div>
                      </div>
          
                      
                     
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Location</h4></label>
                              <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location" value="<?php echo $information["location"];  ?>">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Member Since</h4></label>
                              <input type="text" class="form-control" name="text" id="tex" placeholder="password" title="enter your password." value="<?php echo date('d/m/Y', $allusers->since)  ?>">
                          </div>
                      </div>


                     
                     
                      <div class="form-group">
                           
                      </div>
              	</form>
              
              <hr>
              
             </div><!--/tab-pane-->
            
            
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
                                                      


			</div>


      <div class="box-footer with-border">
                  <p><a href="<?php echo BASE_URL.'?controller=public&action=users' ?>" class="btn btn-warning"><i class="fa fa-arrow-left"></i>Back</a></p>
              </div>

	</div><!-- /.box-body -->



		


		</div>
	</section>		

	 
