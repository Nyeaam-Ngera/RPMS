<header>
<?php include 'header.php'; 
 
    if(isset($_GET['notif'])){
        if($_GET['notif'] == "added"){
            echo '<script class="alert-info">window.alert("Policy Added") </script>';
        } elseif($_GET['notif'] == "deleted"){
            echo '<script class="alert-danger">window.alert("Policy Deleted") </script>';
        } elseif($_GET['notif']=="updated"){
            echo '<script class="alert-danger">window.alert("Policy Updated") </script>';
        }
        else{
            echo "";
        }
}
?>
</header>
    <main> 
        
        <div class="container col-sm-8 my-4 bg-light">
        <div class="h4 text-center text-white bg-secondary">Policies</div>
            <div class=" form-group col-sm-12">
                <?php
                $conn = new mysqli('localhost','root','','rpms') or die(mysqli_error($conn));
                $result = $conn->query('SELECT * FROM policy_tbl') or die($conn->error);      
                ?>
                <table class="table table-borderless">
                    <?php while($row = $result->fetch_assoc()): ?>
                    
                        <tr>
                            <th colspan="1"><?php echo $row['policy_title'] ?>
                         </th>
                        </tr>

                    
                    <tbody>
                        <tr>
                            <td><textarea class="form-control" name="policy_content" id="policy-content" cols="80" rows="10" disabled><?php echo $row['policy_content'] ?></textarea>
                            <p><b>Date Created:</b> <?php echo $row['date_created']?>&nbsp &nbsp<b>Last updated:   </b><?php echo $row['date_modified'] ?></p>
                            </td>
                            <td>
                                <a href="updatepolicy.php?edit=<?php echo $row['policy_id']; ?>" class="btn btn-outline-primary btn-block">Update</a>
                                <br>
                                
                                <a href="includes/processpolicy.php?delete=<?php echo $row['policy_id']; ?>" class="btn btn-outline-danger btn-block">Delete</a>
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


