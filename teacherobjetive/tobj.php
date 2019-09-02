<header>
<?php include ('../rpms/header.php');?>
</header>

<main>
    
  
        <div class="container col-sm-6 my-4 bg-light ">
        <form action="includes/processtobj.php" class="form-group sm" method="POST">
       
                <legend class="legend-control bg-success text-white ">Teacher Objective</legend>
                    <div class="row">
                        <div class= "col-sm-6">
                        <label for="KRA_name" class="control-label"><strong>KRA Name</strong></label>
                        <?php
                            include ("includes/processtobj.php");
                            $resultSet= $conn->query("SELECT KRA_name from tkra_tbl") or die($conn->error);
                            ?>
                            <select name = "KRA_name" class="form-control"><option>Select KRA</option>
                            <?php
                            while($rows = $resultSet->fetch_assoc())
                            {   
                                $KRA_name = $rows['KRA_name'];
                                echo "<option value='$KRA_name'>$KRA_name</option>";
                            }
                            ?>
                            </select>

                            <label for="obj-no" class="control-label"><strong>Objective Number</strong></label>
                            <input type="number" name="tobj_no" id="tobj-no" class="form-control" width="500" placeholder="Enter the Objective Number..."> 
                            </div>

                            <div class="col-md-12">
                            <label for="tobj-name" class="control-label w-25 "><strong>Objective Name</strong></label>
                            <textarea name="tobj_name" id="policy-content" cols="5" rows="5" class="form-control" value="" placeholder="Enter the Objective Name..."></textarea>
                                                 
                            <button type="submit" class="btn btn-success my-4" name="save">Save</button>
                            <a href="displaytobj.php" class="btn btn-primary my-4" role="button">Show Objective</a>
                            </div>
                            
                        </div>
        </form>
       
        </div>
    
</main>
<footer>
</footer>
