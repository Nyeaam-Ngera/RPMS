<header>
<?php include ('../rpms/header.php');?>
</header>

<main>
    
  
        <div class="container col-sm-6 my-4 bg-light ">
        <form action="includes/processtkra.php" class="form-group sm" method="POST">
       
                <legend class="legend-control bg-success text-white ">Teacher KRA</legend>
                    <div class="row">
                        <div class= "col-sm-6">
                            <label for="kra-no" class="control-label"><strong>KRA Number</strong></label>
                            <input type="number" name="KRA_no" id="KRA_no" class="form-control" width="500" placeholder="Enter the KRA Number..."> 
                            </div>

                            <div class="col-md-12">
                            <label for="kra-name" class="control-label w-25 "><strong>KRA Name</strong></label>
                            <textarea name="KRA_name" id="KRA_name" cols="5" rows="5" class="form-control" value="" placeholder="Enter the KRA Name..."></textarea>
                                                 
                            <button type="submit" class="btn btn-success my-4" name="save">Save</button>
                            <a href="displaytkra.php" class="btn btn-primary my-4" role="button">Show KRA</a>
                            </div>
                            
                        </div>
        </form>
       
        </div>
    
</main>
<footer>
</footer>
