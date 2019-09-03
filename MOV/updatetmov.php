<header>
<?php include ('../rpms/header.php');
include ('includes/processtmov.php');
    if(isset($_GET['notif'])){
        if($_GET['notif'] == "added"){
            echo '<script class="alert-info">window.alert("MOV Added") </script>';
        } elseif($_GET['notif'] == "deleted"){
            echo '<script class="alert-danger">window.alert("MOV Deleted") </script>';
        }
        else{
            echo "";
        }
    } 
    if(isset($_GET['edit'])){
        $tmov_id = $_GET['edit'];
        $query = mysqli_query($conn,"SELECT * FROM tmov_tbl WHERE tmov_id=$tmov_id");
        $record = mysqli_fetch_array($query);
        $KRA_name = $record['KRA_name'];
        $tobj_name = $record['tobj_name'];
        $main_mov = $record['main_mov'];
        $supp_mov = $record['supp_mov'];
    }
    
?>

</header>

<main>
    
  
        <div class="container col-sm-6 my-4 bg-light ">
        <form action="includes/processtmov.php" class="form-group sm" method="POST">

        <legend class="legend-control bg-success text-white ">Update Teacher MOV</legend>
                    <div class="row">
                    <div class="col-md-12">
                        <input type="hidden" name="tmov_id" value="<?php echo $tmov_id; ?>"/>
                        <label for="KRA_name" class="control-label"><strong>KRA Name</strong></label>
                        <?php
                            echo "<select name ='KRA_name' class ='form-control'><option>$KRA_name</option>";
                            $query = "SELECT KRA_name from tkra_tbl";
                            $query_run = mysqli_query($conn,$query);
                            while($rows = mysqli_fetch_assoc($query_run)) 
                            {
                                echo "<option value=".$rows['KRA_name'].">".$rows['KRA_name']."</option>";
                            }
                            ?>
                        </select>
                       
                
                        <label for="tobj_name" class="control-label"><strong>Objective Name</strong></label>
                        <?php
                            echo "<select name ='tobj_name' class='form-control'><option>$tobj_name</option>";
                            $query = "SELECT tobj_name from tobj_tbl";
                            $query_run = mysqli_query($conn,$query);
                            while($rows = mysqli_fetch_assoc($query_run)) 
                            {
                                echo "<option value=".$rows['tobj_name'].">".$rows['tobj_name']."</option>";
                            }
                            ?>
                        </select>

                            
                            <label for="main-mov" class="control-label w-25 "><strong>Main MOV</strong></label>
                            <textarea name="main_mov" id="main_mov" cols="5" rows="5" class="form-control" value="" placeholder="Enter the Main MOV..."><?php echo $main_mov ?></textarea>

                            <label for="supp-mov" class="control-label w-25 "><strong>Supporting MOV</strong></label>
                            <textarea name="supp_mov" id="supp_mov" cols="5" rows="5" class="form-control" value="" placeholder="Enter the Supporting MOV..."><?php echo $supp_mov ?></textarea>

                            <button type="submit" class="btn btn-primary my-4" name="update">Update</button>
                            <a href="displaytmov.php" class="btn btn-danger my-4" role="button">Cancel</a>
                            </div>
                            
                        </div>
        </form>
       
        </div>


     
                   
                
    
</main>
<footer>
</footer>