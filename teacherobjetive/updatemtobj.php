<header>
<?php include ('../rpms/header.php');
include ('includes/processmtobj.php');
    if(isset($_GET['notif'])){
        if($_GET['notif'] == "added"){
            echo '<script class="alert-info">window.alert("Rubric Added") </script>';
        } elseif($_GET['notif'] == "deleted"){
            echo '<script class="alert-danger">window.alert("Rubric Deleted") </script>';
        }
        else{
            echo "";
        }
    }
    if(isset($_GET['edit'])){
        $mtobj_id = $_GET['edit'];
        $query = mysqli_query($conn,"SELECT * FROM mtobj_tbl WHERE mtobj_id=$mtobj_id");
        $record = mysqli_fetch_array($query);
        $mtKRA_name = $record['mtKRA_name'];
        $mtobj_no = $record['mtobj_no'];
        $mtobj_name = $record['mtobj_name'];
    }
    
?>

</header>

<main>
    
  
        <div class="container col-sm-6 my-4 bg-light ">
        <form action="includes/processmtobj.php" class="form-group sm" method="POST">
       
                <legend class="legend-control bg-info text-white ">Master Teacher Objective</legend>
                    <div class="row">   
                        <div class="col-sm-6">
                        <input type="hidden" name="mtobj_id" value="<?php echo $mtobj_id; ?>"/>
                        <label for="mtKRA_name" class="control-label"><strong>KRA Name</strong></label>
                            <?php
                            echo "<select name ='mtKRA_name'><option>$mtKRA_name</option>";
                            $query = "SELECT mtKRA_name from mtkra_tbl";
                            $query_run = mysqli_query($conn,$query);
                            while($rows = mysqli_fetch_assoc($query_run)) 
                            {
                                $mtKRA_name = $rows['mtKRA_name'];
                                echo "<option value=".$rows['mtKRA_name'].">".$rows['mtKRA_name']."</option>";
                            }
                            ?>
                        </select>
                            <label for="mtobj-no" class="control-label"><strong>Objective Number</strong></label>
                            <input type="number" name="mtobj_no" id="mtobj_no" class="form-control" width="500" value="<?php echo $mtobj_no; ?>"placeholder="Enter the objective number..."> 
                                        
                    <div>
                            <label for="mtobj-name" class="control-label w-25 "><strong>Objective Name</strong></label>
                            <textarea name="mtobj_name" id="mtobj_name" cols="5" rows="5" class="form-control" value="" placeholder="Enter the objective name..."><?php echo $mtobj_name ?></textarea>
                        </div>  
                        <div class="row">
                        
                            
                            <button type="submit" class="btn btn-primary my-4" name="update">Update</button> &nbsp
                             <a  class="btn btn-danger my-4" href="displaymtobj.php" role="button">Cancel</a>
                            
                        </div>
        </form>
       
        </div>
    
</main>
<footer>
</footer>