<header>
<?php include ('../rpms/header.php');?>
</header>

<main>
    
   
        <div class="container col-sm-6 my-4 bg-light ">
        <form action="includes/processmtmov.php" class="form-group sm" method="POST">
       
                <legend class="legend-control bg-success text-white ">Master Teacher Means of Verification List</legend>
                    <div class="row">
                    <div class="col-md-12">
                        <label for="mtKRA_name" class="control-label"><strong>KRA Name</strong></label>
                        <?php
                            include ("includes/processmtmov.php");
                            $resultSet= $conn->query("SELECT mtKRA_name from mtkra_tbl") or die($conn->error);
                            ?>
                            <select name = "mtKRA_name" class="form-control"><option>Select KRA</option>
                            <?php
                            while($rows = $resultSet->fetch_assoc())
                            {   
                                $mtKRA_name = $rows['mtKRA_name'];
                                echo "<option value='$mtKRA_name'>$mtKRA_name</option>";
                            }
                            ?>
                            </select>
                    
                    
                        <label for="mtobj_name" class="control-label"><strong>Objective Name</strong></label>
                        <?php
                            include ("includes/processmtobj.php");
                            $resultSet= $conn->query("SELECT mtobj_name from mtobj_tbl") or die($conn->error);
                            ?>
                            <select name = "mtobj_name" class="form-control"><option>Select Objective</option>
                            <?php
                            while($rows = $resultSet->fetch_assoc())
                            {   
                                $mtobj_name = $rows['mtobj_name'];
                                echo "<option value='$mtobj_name'>$mtobj_name</option>";
                            }
                        ?>
                        </select>

                            
                            <label for="mtmain-mov" class="control-label w-25 "><strong>Main MOV</strong></label>
                            <textarea name="mtmain_mov" id="mtmain_mov" cols="5" rows="5" class="form-control" value="" placeholder="Enter the Main MOV..."></textarea>

                            <label for="mtsupp-mov" class="control-label w-25 "><strong>Supporting MOV</strong></label>
                            <textarea name="mtsupp_mov" id="mtsupp_mov" cols="5" rows="5" class="form-control" value="" placeholder="Enter the Supporting MOV..."></textarea>

                            <button type="submit" class="btn btn-success my-4" name="save">Save</button>
                            <a href="displaymtmov.php" class="btn btn-primary my-4"  role="button">Show MOV</a>
                            </div>
                            
                        </div>
        </form>
       
        </div>
    
</main>
<footer>
</footer>