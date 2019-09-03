<header>
<?php include ('../rpms/header.php');


    if(isset($_GET['notif'])){
        if($_GET['notif'] == "added"){
            echo '<script class="alert-info">window.alert("MOV Added") </script>';
        } elseif($_GET['notif'] == "deleted"){
            echo '<script class="alert-danger">window.alert("MOV Deleted") </script>';
        } elseif($_GET['notif']=="updated"){
            echo '<script class="alert-danger">window.alert("MOV Updated") </script>';
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
                    $result = $conn->query('SELECT * FROM tmov_tbl')  or die($conn->error);       
                ?>

            <table class="table table-responsive-sm">
                <caption>Teacher MOV</caption>
                <thead class="bg-success text-white">
                <tr>
                    <th>KRA Name</th>
                    <th>Objective Name</th>
                    <th>Main Mov</th>
                    <th>Supporting MOV</th>
                    <th colspan="2" >Action</th>
                </tr>
                </thead>
                <?php
                    while($row = $result->fetch_assoc()):
                ?>
                <tbody class="text-justify">
                    <tr>
                        <td><?php echo $row['KRA_name']; ?></td>
                        <td><?php echo $row['tobj_name']; ?></td> 
                        <td><?php echo $row['main_mov']; ?></td> 
                        <td><?php echo $row['supp_mov']; ?></td> 
                        <td><a href="updatetmov.php?edit=<?php echo $row['tmov_id']; ?>" class="btn btn-outline-primary">Update</a></td>
                        <td><a href="includes/processtmov.php?delete=<?php echo $row['tmov_id']; ?>" class="btn btn-outline-danger">Delete</a>
                                                    
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