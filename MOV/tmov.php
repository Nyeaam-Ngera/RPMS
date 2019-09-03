<header>
<?php include ('../rpms/header.php');?>
</header>

<main>
    
   
        <div class="container col-sm-6 my-4 bg-light ">
        <form action="includes/processtmov.php" class="form-group sm" method="POST">
       
                <legend class="legend-control bg-success text-white ">Teacher Means of Verification List</legend>
                    <div class="row">
                    <div class="col-md-12">
                        <label for="KRA_name" class="control-label"><strong>KRA Name</strong></label>
                        <?php
                            include ("includes/processtmov.php");
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
                    
                    
                        <label for="tobj_name" class="control-label"><strong>Objective Name</strong></label>
                        <?php
                            include ("includes/processtobj.php");
                            $resultSet= $conn->query("SELECT tobj_name from tobj_tbl") or die($conn->error);
                            ?>
                            <select name = "tobj_name" class="form-control"><option>Select Objective</option>
                            <?php
                            while($rows = $resultSet->fetch_assoc())
                            {   
                                $tobj_name = $rows['tobj_name'];
                                echo "<option value='$tobj_name'>$tobj_name</option>";
                            }
                        ?>
                        </select>

                            
                            <label for="main-mov" class="control-label w-25 "><strong>Main MOV</strong></label>
                            <textarea name="main_mov" id="main_mov" cols="5" rows="5" class="form-control" value="" placeholder="Enter the Main MOV..."></textarea>

                            <label for="supp-mov" class="control-label w-25 "><strong>Supporting MOV</strong></label>
                            <textarea name="supp_mov" id="supp_mov" cols="5" rows="5" class="form-control" value="" placeholder="Enter the Supporting MOV..."></textarea>

                            <button type="submit" class="btn btn-success my-4" name="save">Save</button>
                            <a href="displaytmov.php" class="btn btn-primary my-4" role="button">Show MOV</a>
                            </div>
                            
                        </div>
        </form>
       
        </div>
    
</main>
<footer>
</footer>
