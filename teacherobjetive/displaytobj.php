<header>
<?php include ('../rpms/header.php');


    if(isset($_GET['notif'])){
        if($_GET['notif'] == "added"){
            echo '<script class="alert-info">window.alert("Objective Added") </script>';
        } elseif($_GET['notif'] == "deleted"){
            echo '<script class="alert-danger">window.alert("Objective Deleted") </script>';
        } elseif($_GET['notif']=="updated"){
            echo '<script class="alert-danger">window.alert("Objective Updated") </script>';
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
                    $result = $conn->query('SELECT * FROM tobj_tbl')  or die($conn->error);       
                ?>

            <table class="table table-responsive-sm">
                <caption>Teacher Objective</caption>
                <thead class="bg-success text-white">
                <tr>
                    <th>KRA Name</th>
                    <th>Objective Number</th>
                    <th>Objective Name</th>
                    <th colspan="2" >Action</th>
                </tr>
                </thead>
                <?php
                    while($row = $result->fetch_assoc()):
                ?>
                <tbody class="text-justify">
                    <tr>
                        <td><?php echo $row['KRA_name']; ?></td>
                        <td><?php echo $row['tobj_no']; ?></td>
                        <td><?php echo $row['tobj_name']; ?></td> 
                        <td><a href="updatetobj.php?edit=<?php echo $row['tobj_id']; ?>" class="btn btn-outline-primary">Update</a></td>
                        <td><a href="includes/processtobj.php?delete=<?php echo $row['tobj_id']; ?>" class="btn btn-outline-danger">Delete</a>
                                                    
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