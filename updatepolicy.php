<header>
<?php include 'header.php'; 
    if(isset($_GET['notif'])){
        if($_GET['notif'] == "added"){
            echo '<script class="alert-info">window.alert("Policy Added") </script>';
        } elseif($_GET['notif'] == "deleted"){
            echo '<script class="alert-danger">window.alert("Policy Deleted") </script>';
        }
        else{
            echo "";
        }
    }

    if(isset($_GET['edit'])){
        $policy_id = $_GET['edit'];
        
        $query = mysqli_query($conn,"SELECT * FROM policy_tbl WHERE policy_id=$policy_id");
        $record = mysqli_fetch_array($query);
        $policy_title = $record['policy_title'];
        $policy_content = $record['policy_content'];
        

    }
    
?>

</header>

<main>
<div class="container col-sm-8 my-4 bg-light ">
        <form action="includes/processpolicy.php" class="form-group sm" method="POST">
        <input type="hidden" name="policy_id" value="<?php echo $policy_id; ?>"/>
                <legend class="legend-control"><strong>Update Policy Description</strong></legend>
                    <div>
                        <label for="policy-title" class="control-label "><strong>Policy Title</strong></label>
                        <input type="text" name="policy_title" id="" class="form-control" value="<?php echo $policy_title; ?>">
                    </div>
                    <div>
                        <label for="policy-content" class="control-label "><strong>Policy content</strong></label>
                        <textarea name="policy_content" id="policy-content" cols="30" rows="5" class="form-control"><?php echo $policy_content; ?></textarea>
                    </div>
                    <div class="row">
                        <button type="submit" class="btn btn-secondary  my-4" name="update">Update</button>&nbsp
                        <a  class="btn btn-danger my-4" href="displaypolicy.php" role="button">Cancel</a>
                    </div>   

        </form>
        </div>
 
</main>

<footer>

</footer>

