<?php
	include("includes/db.php");
	include("includes/header.php");
?>

<body>
	<div class="row">
	<div id="wrapper"><!-- #wrapper begin -->
       
       <?php include("includes/sidebar.php"); ?>
       
        <div id="page-wrapper"><!-- #page-wrapper begin -->
            <div class="container-fluid"><!-- container-fluid begin -->
                
                <?php
                
                    if(isset($_GET['view_products'])){
                        
                        include("view_products.php");
                        
                }	if(isset($_GET['view_service_categories'])){
                        
                        include("view_service_categories.php");
                        
                }	if(isset($_GET['view_services'])){
                        
                        include("view_services.php");
                        
                }	if(isset($_GET['view_packages'])){
                        
                        include("view_packages.php");
                        
                }	if(isset($_GET['view_p_cats'])){
                        
                        include("view_p_cats.php");
                        
                }   
        
                ?>
                
            </div><!-- container-fluid finish -->
        </div><!-- #page-wrapper finish -->
        </div><!-- #page-wrapper finish -->
    </div><!-- wrapper finish -->
</div>
<script src="js/jquery-331.min.js"></script>     
<script src="js/bootstrap-337.min.js"></script>           
</body>
</html>

