
<?php
$KRA_no = $KRA_name = "";
$edit_state = false;
$KRA_id = 0; 
$conn = new mysqli('localhost', 'root', '' ,'rpms') or die(mysqli_error($conn));
if(isset($_POST['save'])){
    $KRA_no = $_POST['KRA_no'];   
    $KRA_name = $_POST['KRA_name'];
    $timestamp = date("Y-m-d H:i:s");
    $conn->query("INSERT INTO tkra_tbl(KRA_no,KRA_name,date_added) VALUES ('$KRA_no','$KRA_name','$timestamp')") or die($conn->error);
    header('location:../displaytkra.php?notif=added');
    
}
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $conn->query("DELETE FROM tkra_tbl WHERE KRA_id=$id") or die($conn->error);
    header('location:../displaytkra.php?notif=deleted');
}
if(isset($_POST['update'])){
    $KRA_id = $_POST['KRA_id'];
    $KRA_no = $_POST['KRA_no'];
    $KRA_name  = $_POST['KRA_name'];
     mysqli_query($conn,"UPDATE tkra_tbl SET KRA_id='$KRA_id', KRA_no='$KRA_no', KRA_name='$KRA_name' WHERE KRA_id = '$KRA_id' ");
    header("location:../displaytkra.php?notif=updated");
}
?>