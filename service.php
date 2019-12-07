<?php 
    
    $active='Services';
    include("includes/header.php");

?>

    <div id="content"><!-- #content Begin -->
        <div class="container"><!-- container Begin -->
			<div class="col-md-12"><!-- col-md-12 Begin -->
               
                <ul class="breadcrumb"><!-- breadcrumb Begin -->
                    <li>
                       <a href="index.php">Home</a>
                    </li>
                    <li>
                       Services
                    </li>
                </ul><!-- breadcrumb Finish -->
               
            </div><!-- col-md-12 Finish -->
			<div class="col-md-3"><!-- col-md-3 Begin -->
   
				<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Begin -->
					<div class="panel-heading"><!-- panel-heading Begin -->
						<h3 class="panel-title">Services Categories</h3>
					</div><!-- panel-heading Finish -->
					
					<div class="panel-body"><!-- panel-body Begin -->
						<ul class="nav nav-pills nav-stacked category-menu"><!-- nav nav-pills nav-stacked category-menu Begin -->
							
							<?php 
							
								$service_cat = "select * from service_categories";
    
								$run_service_cat = mysqli_query($db,$service_cat);
								
								while($row_service_cat=mysqli_fetch_array($run_service_cat)){
									
									$service_cat_id = $row_service_cat['service_cat_id'];
									$service_cat_name = $row_service_cat['service_cat_name'];
									
									
									
									echo "
									
										<li>
										
											<a href='service.php?service_cat=$service_cat_id'> $service_cat_name </a>
										
										</li>
									
									";
									
								}

							?>
							
						</ul><!-- nav nav-pills nav-stacked category-menu Finish -->
					</div><!-- panel-body Finish -->
					
				</div><!-- panel panel-default sidebar-menu Finish -->


				<div class="panel panel-default sidebar-menu"><!-- panel panel-default sidebar-menu Begin -->
					<div class="panel-heading"><!-- panel-heading Begin -->
						<h3 class="panel-title">Packages</h3>
					</div><!-- panel-heading Finish -->
					
					<div class="panel-body"><!-- panel-body Begin -->
						<ul class="nav nav-pills nav-stacked category-menu"><!-- nav nav-pills nav-stacked category-menu Begin -->
							
							<?php 
							
								$packages = "select * from packages";
    
								$run_packages = mysqli_query($db,$packages);
								
								while($row_packages=mysqli_fetch_array($run_packages)){
									
									$packages_id = $row_packages['packages_id'];
									$packages_name = $row_packages['packages_name'];
									
									
									
									echo "
									
										<li>
										
											<a href='service.php?packages=$packages_id'> $packages_name </a>
										
										</li>
									
									";
									
								}

							?>
							
						</ul><!-- nav nav-pills nav-stacked category-menu Finish -->
					</div><!-- panel-body Finish -->
					
				</div><!-- panel panel-default sidebar-menu Finish -->
               
            </div><!-- col-md-3 Finish -->
			<div class="col-md-9"><!-- col-md-9 Begin -->
					<?php
						$get_service ="select * from service ";
        
						$run_service = mysqli_query($db,$get_service);
						
						$row_service = mysqli_fetch_array($run_service);
						
						$service_name = $row_service['service_name'];
						
						$service_id = $row_service['service_id'];
						
						add_wallet();
					?>
					<form action="service.php?add_wallet=<?php echo $service_id; ?>" class="form-horizontal" method="post">
					<?php
						getservice();
						//getpackage();
					?>
					</form>
				
			</div><!-- col-md-9 Finish -->
			
		</div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
</body>
<?php

?>
</html>
