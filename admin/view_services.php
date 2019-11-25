

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / View Service 
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-tags fa-fw"></i> View Service 
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-hover table-striped table-bordered"><!-- tabel tabel-hover table-striped table-bordered begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> Service ID </th>
                                <th> Service Name </th>
                                <th> Service Category </th>
                                <th> Customer Cost </th>
                                <th> Beatitian Cost </th>
                                <th> Edit </th>
                                <th> Delete </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
                            
                                $i=0;
          
                                $get_service_categories = "select * from service";
          
                                $run_service_categories = mysqli_query($con,$get_service_categories);
          
                                while($row_service_categories=mysqli_fetch_array($run_service_categories)){
                                    
                                    $service_id = $row_service_categories['service_id'];
                                    
                                    $service_name = $row_service_categories['service_name'];
                                    
                                    $service_category = $row_service_categories['service_category'];
									
                                    $customer_cost = $row_service_categories['customer_cost'];
									
                                    $beautitian_cost = $row_service_categories['beautitian_cost'];
									
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $service_name; ?> </td>
                                <td> <?php echo $service_category; ?> </td>
                                <td> <?php echo $customer_cost; ?> </td>
                                <td> <?php echo $beautitian_cost; ?> </td>
								<td> 
                                    <a href="index.php?activate_packages= <?php echo $packages_id; ?> ">
                                        <i class="fa fa-pencil"></i> Edit
                                    </a>
                                </td>
                                <td> 
                                    <a href="index.php?delete_packages= <?php echo $packages_id; ?> ">
                                        <i class="fa fa-trash"></i> Delete
                                    </a>
                                </td>
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                        
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- tabel tabel-hover table-striped table-bordered finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->


