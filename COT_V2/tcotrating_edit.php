<?php include 'header.php';?>
<?php

$conn = mysqli_connect('localhost', 'root', '' ,'rpms') or die(mysqli_error($conn));
$tCriteriaID = $_GET['tcriteriaupdate'];
    $query = "SELECT * FROM tcotratingsheet where tCriteriaID = '$tCriteriaID'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        while($row = mysqli_fetch_array($query_run))
        {


            ?>
<div class="container col-sm-8 my-4 bg-light ">
        <div class="container col-sm-8 my-4 bg-light ">
                <form action="processindicator.php" class="form-group sm" method="POST">
                    <input type="hidden" name="tCriteriaID" value="<?php echo $row['tCriteriaID']?>">
                        <legend class="legend-control bg-success text-white ">Update Criteria - Teacher</legend>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="level" class="control-label"><strong>Criteria</strong></label>
                                    <input type="text" name="Criteria" value="<?php echo $row['Criteria']?>" class="form-control" width="500" required> 
                                </div>
                            </div>
                            <div>
                                    <button type="submit" class="btn-sm btn-success my-4" name="tcriteriaupdate">Update</button>
                                    <input type="button" value="Cancel" class="btn-sm btn-danger my-4" onclick="window.location.href='tcotrating_index.php'" />
                            </div>
                </form>
        </div>
</div>
            <?php
        }

    }
    else
    {
        echo '<script>alert("No record found!")</script>';  
    }

?>