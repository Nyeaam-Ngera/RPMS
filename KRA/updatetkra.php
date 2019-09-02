<header>
<?php include ('../rpms/header.php');
include ('includes/processtkra.php');
    if(isset($_GET['notif'])){
        if($_GET['notif'] == "added"){
            echo '<script class="alert-info">window.alert("KRA Added") </script>';
        } elseif($_GET['notif'] == "deleted"){
            echo '<script class="alert-danger">window.alert("KRA Deleted") </script>';
        }
        else{
            echo "";
        }
    }
    if(isset($_GET['edit'])){
        $KRA_id = $_GET['edit'];
        $query = mysqli_query($conn,"SELECT * FROM tkra_tbl WHERE KRA_id=$KRA_id");
        $record = mysqli_fetch_array($query);
        $KRA_no = $record['KRA_no'];
        $KRA_name = $record['KRA_name'];
    }
    
?>

</header>

<main>
    
  
        <div class="container col-sm-6 my-4 bg-light ">
        <form action="includes/processtkra.php" class="form-group sm" method="POST">
       
                <legend class="legend-control bg-info text-white "> Teacher KRA</legend>
                    <div class="row">   
                        <div class="col-sm-6">
                        <input type="hidden" name="KRA_id" value="<?php echo $KRA_id; ?>"/>
                       
                            <label for="KRA-no" class="control-label"><strong>KRA Number</strong></label>
                            <input type="number" name="KRA_no" id="KRA_no" class="form-control" width="500" value="<?php echo $KRA_no; ?>"placeholder="Enter the KRA number..."> 
                                        
                    <div>
                            <label for="KRA-name" class="control-label w-25 "><strong>KRA Name</strong></label>
                            <textarea name="KRA_name" id="KRA_name" cols="5" rows="5" class="form-control" value="" placeholder="Enter the KRA name..."><?php echo $KRA_name ?></textarea>
                        </div>  
                        <div class="row">
                        
                            
                            <button type="submit" class="btn btn-primary my-4" name="update">Update</button> &nbsp
                             <a  class="btn btn-danger my-4" href="displaytkra.php" role="button">Cancel</a>
                            
                        </div>
        </form>
       
        </div>
    
</main>
<footer>
</footer>