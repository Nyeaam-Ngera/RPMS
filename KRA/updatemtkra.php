<header>
<?php include ('../rpms/header.php');
include ('includes/processmtkra.php');
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
        $mtKRA_id = $_GET['edit'];
        $query = mysqli_query($conn,"SELECT * FROM mtkra_tbl WHERE mtKRA_id=$mtKRA_id");
        $record = mysqli_fetch_array($query);
        $mtKRA_no = $record['mtKRA_no'];
        $mtKRA_name = $record['mtKRA_name'];
    }
    
?>

</header>

<main>
    
  
        <div class="container col-sm-6 my-4 bg-light ">
        <form action="includes/processmtkra.php" class="form-group sm" method="POST">
       
                <legend class="legend-control bg-info text-white ">Master Teacher KRA</legend>
                    <div class="row">   
                        <div class="col-sm-6">
                        <input type="hidden" name="mtKRA_id" value="<?php echo $mtKRA_id; ?>"/>
                       
                            <label for="mtKRA-no" class="control-label"><strong>KRA Number</strong></label>
                            <input type="number" name="mtKRA_no" id="mtKRA_no" class="form-control" width="500" value="<?php echo $mtKRA_no; ?>"placeholder="Enter the KRA number..."> 
                                        
                    <div>
                            <label for="mtKRA-name" class="control-label w-25 "><strong>KRA Name</strong></label>
                            <textarea name="mtKRA_name" id="mtKRA_name" cols="5" rows="5" class="form-control" value="" placeholder="Enter the KRA name..."><?php echo $mtKRA_name ?></textarea>
                        </div>  
                        <div class="row">
                        
                            
                            <button type="submit" class="btn btn-primary my-4" name="update">Update</button> &nbsp
                             <a  class="btn btn-danger my-4" href="displaymtkra.php" role="button">Cancel</a>
                            
                        </div>
        </form>
       
        </div>
    
</main>
<footer>
</footer>