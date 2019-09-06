<header>
<?php
   include 'header.php';
    if(isset($_GET['delete'])){
        $pmcf_id = $_GET['delete'];
        
        $query = mysqli_query($conn,"SELECT * FROM pmcf_tbl WHERE pmcf_id=$pmcf_id");
        $record = mysqli_fetch_array($query);
        
       
    }

    

  
?>
</header>
<main>
    <div class="container col-sm-6 my-4">
    <div class="card">
     <div class="card-body">
    <div class="h4 breadcrumb alert alert-danger text-center">Delete PMCF Confirmation</div>
        <input type="hidden" name="pmcf_id" value="<?php echo $pmcf_id; ?>"/>
        <p class="h5">Do you want to delete this PMCF from the database?</p>
        <div class="row my-4">
            <div class="col-md-6">
            <a href="includes/processpmcf.php?delete=<?php echo $pmcf_id;?>" class="btn btn-danger btn-block">Delete</a>
            </div>
            <div class="col-md-6">
            <a href="pmcf.php" class="btn btn-dark btn-block">Cancel</a>
            </div>
        </div>
    </div>
        </div>

    </div>


    
 
</main>

<footer>

</footer>

