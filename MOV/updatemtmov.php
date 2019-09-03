<header>
<?php include ('../rpms/header.php');
include ('includes/processmtmov.php');
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
        $mtmov_id = $_GET['edit'];
        $query = mysqli_query($conn,"SELECT * FROM mtmov_tbl WHERE mtmov_id=$mtmov_id");
        $record = mysqli_fetch_array($query);
        $mtKRA_name = $record['mtKRA_name'];
        $mttobj_name = $record['mtobj_name'];
        $mtmain_mov = $record['mtmain_mov'];
        $mtsupp_mov = $record['mtsupp_mov'];
    }
    
?>

</header>

<main>
    
  
        <div class="container col-sm-6 my-4 bg-light ">
        <form action="includes/processmtmov.php" class="form-group sm" method="POST">

        <legend class="legend-control bg-success text-white ">Update Master Teacher MOV</legend>
                    <div class="row">
                    <div class="col-md-12">
                        <input type="hidden" name="mtmov_id" value="<?php echo $mtmov_id; ?>"/>
                        <label for="mtKRA_name" class="control-label"><strong>KRA Name</strong></label>
                        <?php
                            echo "<select name ='mtKRA_name' class ='form-control'><option>$mtKRA_name</option>";
                            $query = "SELECT mtKRA_name from mtkra_tbl";
                            $query_run = mysqli_query($conn,$query);
                            while($rows = mysqli_fetch_assoc($query_run)) 
                            {
                                echo "<option value=".$rows['mtKRA_name'].">".$rows['mtKRA_name']."</option>";
                            }
                            ?>
                        </select>
                       
                
                        <label for="mtobj_name" class="control-label"><strong>Objective Name</strong></label>
                        <?php
                            echo "<select name ='mtobj_name' class='form-control'><option>$mtobj_name</option>";
                            $query = "SELECT mtobj_name from mtobj_tbl";
                            $query_run = mysqli_query($conn,$query);
                            while($rows = mysqli_fetch_assoc($query_run)) 
                            {
                                echo "<option value=".$rows['mtobj_name'].">".$rows['mtobj_name']."</option>";
                            }
                            ?>
                        </select>

                            
                            <label for="mtmain-mov" class="control-label w-25 "><strong>Main MOV</strong></label>
                            <textarea name="mtmain_mov" id="mtmain_mov" cols="5" rows="5" class="form-control" value="" placeholder="Enter the Main MOV..."><?php echo $mtmain_mov ?></textarea>

                            <label for="mtsupp-mov" class="control-label w-25 "><strong>Supporting MOV</strong></label>
                            <textarea name="mtsupp_mov" id="mtsupp_mov" cols="5" rows="5" class="form-control" value="" placeholder="Enter the Supporting MOV..."><?php echo $mtsupp_mov ?></textarea>

                            <button type="submit" class="btn btn-primary my-4" name="update">Update</button>
                            <a href="displaymtmov.php" class="btn btn-danger my-4" role="button">Cancel</a>
                            </div>
                            
                        </div>
        </form>
       
        </div>


     
                   
                
    
</main>
<footer>
</footer>