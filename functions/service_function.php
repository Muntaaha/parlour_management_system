<?php
//session_start();

$db = mysqli_connect("localhost","root","","pms");

/// begin getRealIpUser functions ///

//function getRealIpUser(){
    
    //switch(true){
            
            //case(!empty($_SERVER['HTTP_X_REAL_IP'])) : return $_SERVER['HTTP_X_REAL_IP'];
            //case(!empty($_SERVER['HTTP_CLIENT_IP'])) : return $_SERVER['HTTP_CLIENT_IP'];
            //case(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) : return $_SERVER['HTTP_X_FORWARDED_FOR'];
            
            //default : return $_SERVER['REMOTE_ADDR'];
            
    //}
    
//}

/// finish getRealIpUser functions ///
/// begin getpcatpro functions ///

function getservice(){
    
    global $db;
    
    if(isset($_GET['service_cat'])){
        
        $service_cat_id = $_GET['service_cat'];
        
        $get_service_cat ="select * from service_categories where service_cat_id='$service_cat_id'";
        
        $run_service_cat = mysqli_query($db,$get_service_cat);
        
        $row_service_cat = mysqli_fetch_array($run_service_cat);
        
        $service_cat_name = $row_service_cat['service_cat_name'];
        
        $get_services ="select * from service where service_category='$service_cat_name'";
        
        $run_services = mysqli_query($db,$get_services);
        
        $count = mysqli_num_rows($run_services);
        
        if($count==0){
            
            echo "
            
                <div class='box'>
                
                    <h1> No service Found In This service Categories </h1>
                
                </div>
            
            ";
            
        }else{
            
            echo "
            
                <div class='box'>
                
                    <h1> $service_cat_name </h1>
                
                </div>
            
            ";
            
        }
        
        while($row_services=mysqli_fetch_array($run_services)){
            
            $service_id = $row_services['service_id'];
        
            $service_name = $row_services['service_name'];

            $service_price = $row_services['beautitian_cost'];
            //href='service.php?service_cat_id=$ser_package_id'
            echo "
            
                <div class='col-md-4 col-sm-6 center-responsive'>
        
            <table style='width: 800px;'>
            
                <tr>
					<td style='width: 50px; padding : 30px; font-size: 14px; color: #fff;'>$service_id</td>
                    <td style='width: 250px; padding : 30px; font-size: 20px; color: #fff;'>$service_name</td>
                    <td style='width: 250px; padding : 30px; font-size: 20px; color: #fff;'>$service_price tk</td>
                    <td style=''>
						<p class='text-center buttons'><button class='btn btn-primary i fa fa-shopping-cart'> Add to wallet</button></p>
					</td>
                </tr>
            
            </table>
        
        </div>
            
            ";
            
        }
        
    }
    
}

/// finish getpcatpro functions ///

//add wallet starts
function add_wallet(){
    
    global $db;
    
    if(isset($_GET['add_wallet'])){
		
		$ip_add = $_SESSION['customer_email'];
        
        $ser_package_id = $_GET['add_wallet'];
        
		$get_service ="select * from service where service_id='$ser_package_id'";
        
		$run_service = mysqli_query($db,$get_service);
							
		$row_service = mysqli_fetch_array($run_service);
							
		$service_name = $row_service['service_name'];
							
		$service_id = $row_service['service_id'];
		
		$beautitian_cost = $row_service['beautitian_cost'];
		
		$customer_cost = $row_service['customer_cost'];
        
        $check_product = "select * from wallet where ip_add='$ip_add' AND ser_package_id='$ser_package_id'";
        
        $run_check = mysqli_query($db,$check_product);
        
        if(mysqli_num_rows($run_check)>0){
            
            echo "<script>alert('This product has already added in wallet')</script>";
            echo "<script>window.open('service.php?service_cat=$ser_package_id','_self')</script>";
            
        }else{
            
            $query = "insert into walltet (ser_package_id, ip_add, service_name, beautitian_cost, customer_cost) values ('$ser_package_id','$ip_add','$service_name','$beautitian_cost',customer_cost')";
            
            $run_query = mysqli_query($db,$query);
            
            echo "<script>window.open('service.php?service_cat=$ser_package_id','_self')</script>";
            
        }
        
    }
    
}

//add wallet ends
?>