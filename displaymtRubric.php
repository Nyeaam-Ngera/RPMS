<header>
<?php include 'header.php'; 
    if(isset($_GET['notif'])){
        if($_GET['notif'] == "added"){
            echo '<script class="alert-info">window.alert("Rubric Added") </script>';
        } elseif($_GET['notif'] == "deleted"){
            echo '<script class="alert-danger">window.alert("Rubric Deleted") </script>';
        } elseif($_GET['notif']=="updated"){
            echo '<script class="alert-danger">window.alert("Rubric Updated") </script>';
        }
        else{
            echo "";
        }
    }

    
?>

</header>

<main>
    <div class="container">
        <div class="col-sm-10">
                 <?php 
                    $conn = new mysqli('localhost','root','','rpms') or die(mysqli_error($conn));
                    $result = $conn->query('SELECT * FROM mtrubric_tbl')  or die($conn->error);       
                ?>

            <table class="table table-responsive-sm">
                <caption>Rubric Level for Master Teacher I-IV</caption>
                <thead class="bg-primary text-white ">
                <tr>
                    <th>Level</th>
                    <th>Level Name</th>
                    <th>Level Discription</th>
                    <th colspan="2" >Action</th>
                </tr>
                </thead>
                <?php
                    while($row = $result->fetch_assoc()):
                ?>
                <tbody class="text-justify">
                    <tr>
                        <td><?php echo $row['rubric_lvl']; ?></td>
                        <td><?php echo $row['level_name']; ?></td>
                        <td><?php echo $row['rubric_description']; ?></td> 
                        <td><a href="updatemtRubric.php?edit=<?php echo $row['rubric_id']; ?>" class="btn btn-outline-primary">Update</a></td>
                        <td><a href="includes/processmtrubric.php?delete=<?php echo $row['rubric_id']; ?>" class="btn btn-outline-danger">Delete</a>
                                                    
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>              
            </table>
        </div>
    </div>
  
        
    

</main>

<footer>

</footer>