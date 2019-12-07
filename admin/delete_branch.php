
<?php 

    if(isset($_GET['delete_branch'])){
        
        $delete_id = $_GET['delete_branch'];
        
        $delete_branch = "delete from branch where branch_id='$delete_id'";
        
        $run_delete = mysqli_query($con,$delete_branch);
        
        if($run_delete){
            
            echo "<script>alert('One of your branch has been Deleted')</script>";
            
            echo "<script>window.open('index.php?view_branch','_self')</script>";
            
        }
        
    }

?>