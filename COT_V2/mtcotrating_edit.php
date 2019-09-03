<?php include 'header.php';?>
<?php

$conn = mysqli_connect('localhost', 'root', '' ,'rpms') or die(mysqli_error($conn));
$mt_criteriaid = $_GET['mtcriteriaupdate'];
    $query = "SELECT * FROM mtcotratingsheet where mt_criteriaid = '$mt_criteriaid'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        while($row = mysqli_fetch_array($query_run))
        {


            ?>
<div class="container col-sm-8 my-4 bg-light ">
        <div class="container col-sm-8 my-4 bg-light ">
                <form action="processindicator.php" class="form-group sm" method="POST">
                    <input type="hidden" name="mt_criteriaid" value="<?php echo $row['mt_criteriaid']?>">
                        <legend class="legend-control bg-info text-white ">Update Criteria - Master Teacher</legend>
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="level" class="control-label"><strong>Criteria</strong></label>
                                    <input type="text" name="criteria" value="<?php echo $row['criteria']?>" class="form-control" width="500" required> 
                                </div>
                            </div>
                            <div>
                                    <button type="submit" class="btn-sm btn-success my-4" name="mtcriteriaupdate">Update</button>
                                    <input type="button" value="Cancel" class="btn-sm btn-danger my-4" onclick="window.location.href='mtcotrating_index.php'" />
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