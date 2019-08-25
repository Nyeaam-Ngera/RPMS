<header>
<?php include 'header.php'; 
    if(isset($_GET['notif'])){
        if($_GET['notif'] == "added"){
            echo '<script class="alert-info">window.alert("Rubric Added") </script>';
        } elseif($_GET['notif'] == "deleted"){
            echo '<script class="alert-danger">window.alert("Rubric Deleted") </script>';
        }
        else{
            echo "";
        }
    }

    if(isset($_GET['edit'])){
        $rubric_id = $_GET['edit'];
        
        $query = mysqli_query($conn,"SELECT * FROM trubric_tbl WHERE rubric_id=$rubric_id");
        $record = mysqli_fetch_array($query);
        $rubric_lvl = $record['rubric_lvl'];
        $level_name = $record['level_name'];
        $rubric_description = $record['rubric_description'];

    }
    
?>

</header>

<main>
    
  
        <div class="container col-sm-6 my-4 bg-light ">
        <form action="includes/processtrubric.php" class="form-group sm" method="POST">
       
                <legend class="legend-control bg-success text-white ">Rubric Level Summary for Teacher</legend>
                    <div class="row">
                        <div class="col-sm-6">
                        <input type="hidden" name="rubric_id" value="<?php echo $rubric_id; ?>"/>
                            <label for="level" class="control-label"><strong>Rubric Level</strong></label>
                            <input type="number" name="rubric_lvl" id="rubric-lvl" class="form-control" width="500" value="<?php echo $rubric_lvl; ?>"placeholder="Enter the rubric level..."> 
                        </div>

                        <div class="col-sm-6">
                            <label for="level-name" class="control-label"><strong>Level Name</strong></label>
                            <input type="text" name="level_name" id=level-name" class="form-control" width="500" value="<?php echo $level_name; ?>" placeholder="Enter the Level Name..."/> 
                        </div>
                    </div>
                    
                    <div>
                            <label for="description" class="control-label w-25 "><strong>Description</strong></label>
                            <textarea name="rubric_description" id="policy-content" cols="5" rows="5" class="form-control" value="" placeholder="Enter the description..."><?php echo $rubric_description ?></textarea>
                        </div>  
                        <div class="row">
                        
                            
                            <button type="submit" class="btn-sm btn-primary my-4" name="update">Update</button> &nbsp
                             <a  class="btn-sm btn-danger my-4" href="displaytRubric.php" role="button">Cancel</a>
                            
                        </div>
        </form>
       
        </div>
    

</main>

<footer>

</footer>
