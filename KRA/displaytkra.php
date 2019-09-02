<header>
<?php include ('../rpms/header.php');


    if(isset($_GET['notif'])){
        if($_GET['notif'] == "added"){
            echo '<script class="alert-info">window.alert("KRA Added") </script>';
        } elseif($_GET['notif'] == "deleted"){
            echo '<script class="alert-danger">window.alert("KRA Deleted") </script>';
        } elseif($_GET['notif']=="updated"){
            echo '<script class="alert-danger">window.alert("KRA Updated") </script>';
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
                    $result = $conn->query('SELECT * FROM tkra_tbl')  or die($conn->error);       
                ?>

            <table class="table table-responsive-sm">
                <caption>Teacher KRA</caption>
                <thead class="bg-success text-white">
                <tr>
                    <th>KRA No</th>
                    <th>KRA Name</th>
                    <th colspan="2" >Action</th>
                </tr>
                </thead>
                <?php
                    while($row = $result->fetch_assoc()):
                ?>
                <tbody class="text-justify">
                    <tr>
                        <td><?php echo $row['KRA_no']; ?></td>
                        <td><?php echo $row['KRA_name']; ?></td> 
                        <td><a href="updatetkra.php?edit=<?php echo $row['KRA_id']; ?>" class="btn btn-outline-primary">Update</a></td>
                        <td><a href="includes/processtkra.php?delete=<?php echo $row['KRA_id']; ?>" class="btn btn-outline-danger">Delete</a>
                                                    
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