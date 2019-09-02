<header>
<?php include ('../rpms/header.php');?>
</header>

<main>
    
  
        <div class="container col-sm-6 my-4 bg-light ">
        <form action="includes/processmtkra.php" class="form-group sm" method="POST">
       
                <legend class="legend-control bg-success text-white ">Master Teacher KRA</legend>
                    <div class="row">
                        <div class= "col-sm-6">
                            <label for="mtkra-no" class="control-label"><strong>KRA Number</strong></label>
                            <input type="number" name="mtKRA_no" id="mtKRA_no" class="form-control" width="500" placeholder="Enter the KRA Number..."> 
                            </div>

                            <div class="col-md-12">
                            <label for="mtkra-name" class="control-label w-25 "><strong>KRA Name</strong></label>
                            <textarea name="mtKRA_name" id="mtKRA_name" cols="5" rows="5" class="form-control" value="" placeholder="Enter the KRA Name..."></textarea>
                                                 
                            <button type="submit" class="btn btn-success my-4" name="save">Save</button>
                            <a href="displaymtkra.php" class="btn btn-primary my-4" role="button">Show KRA</a>
                            </div>
                            
                        </div>
        </form>
       
        </div>
    
</main>
<footer>
</footer>