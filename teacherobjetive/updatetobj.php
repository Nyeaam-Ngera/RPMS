<header>
<?php include ('../rpms/header.php');
include ('includes/processtobj.php');
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
        $tobj_id = $_GET['edit'];
        $query = mysqli_query($conn,"SELECT * FROM tobj_tbl WHERE tobj_id=$tobj_id");
        $record = mysqli_fetch_array($query);
        $KRA_name = $record['KRA_name'];
        $tobj_no = $record['tobj_no'];
        $tobj_name = $record['tobj_name'];
    }
    
?>

</header>

<main>
    
  
        <div class="container col-sm-6 my-4 bg-light ">
        <form action="includes/processtobj.php" class="form-group sm" method="POST">
       
                <legend class="legend-control bg-info text-white "> Teacher Objective</legend>
                    <div class="row">   
                        <div class="col-sm-6">
                        <input type="hidden" name="tobj_id" value="<?php echo $tobj_id; ?>"/>
                        <label for="KRA_name" class="control-label"><strong>KRA Name</strong></label>
                            <?php
                            echo "<select name ='KRA_name'><option>$KRA_name</option>";
                            $query = "SELECT KRA_name from tkra_tbl";
                            $query_run = mysqli_query($conn,$query);
                            while($rows = mysqli_fetch_assoc($query_run)) 
                            {
                                echo "<option value=".$rows['KRA_name'].">".$rows['KRA_name']."</option>";
                            }
                            ?>
                        </select>
                            <label for="tobj-no" class="control-label"><strong>Objective Number</strong></label>
                            <input type="number" name="tobj_no" id="tobj_no" class="form-control" width="500" value="<?php echo $tobj_no; ?>"placeholder="Enter the objective number..."> 
                                        
                    <div>
                            <label for="tobj-name" class="control-label w-25 "><strong>Objective Name</strong></label>
                            <textarea name="tobj_name" id="tobj_name" cols="5" rows="5" class="form-control" value="" placeholder="Enter the objective name..."><?php echo $tobj_name ?></textarea>
                        </div>  
                        <div class="row">
                        
                            
                            <button type="submit" class="btn btn-primary my-4" name="update">Update</button> &nbsp
                             <a  class="btn btn-danger my-4" href="displaytobj.php" role="button">Cancel</a>
                            
                        </div>
        </form>
       
        </div>
    
</main>
<footer>
</footer>