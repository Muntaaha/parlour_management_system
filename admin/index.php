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
                
                    if(isset($_GET['insert_beautitian'])){
                        
                        include("insert_beautitian.php");
                        
                }   if(isset($_GET['view_beautitian'])){
                        
                        include("view_beautitian.php");
                        
                }   if(isset($_GET['delete_beautitian'])){
                        
                        include("delete_beautitian.php");
                        
                }   if(isset($_GET['edit_beautitian'])){
                        
                        include("edit_beautitian.php");
                        
                }   if(isset($_GET['dashboard'])){
                        
                        include("dashboard.php");
                        
                }    if(isset($_GET['insert_user'])){
                        
                        include("insert_user.php");
                        
                }   if(isset($_GET['user_profile'])){
                        
                        include("user_profile.php");
                        
                }	if(isset($_GET['view_users'])){
                        
                        include("view_users.php");
                        
                }   if(isset($_GET['delete_user'])){
                        
                        include("delete_user.php");
                        
                }	if(isset($_GET['insert_packages'])){
                        
                        include("insert_packages.php");
                        
                }	if(isset($_GET['view_packages'])){
                        
                        include("view_packages.php");
                        
                }	if(isset($_GET['edit_packages'])){
                        
                        include("edit_packages.php");
                        
                }	if(isset($_GET['delete_packages'])){
                        
                        include("delete_packages.php");
                        
                }	if(isset($_GET['insert_product'])){
                        
                        include("insert_product.php");
                        
                }	if(isset($_GET['view_products'])){
                        
                        include("view_products.php");
                        
                }	if(isset($_GET['insert_p_cat'])){
                        
                        include("insert_p_cat.php");
                        
                }	if(isset($_GET['view_p_cats'])){
                        
                        include("view_p_cats.php");
                        
                }	if(isset($_GET['edit_product'])){
                        
                        include("edit_product.php");
                        
                }	if(isset($_GET['insert_service_categories'])){
                        
                        include("insert_services_category.php");
                        
                }	if(isset($_GET['view_service_categories'])){
                        
                        include("view_service_categories.php");
                        
                }	if(isset($_GET['insert_services'])){
                        
                        include("insert_services.php");
                        
                }	if(isset($_GET['view_services'])){
                        
                        include("view_services.php");
                        
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

