
<?php
$mtKRA_no = $mtKRA_name = "";
$edit_state = false;
$mtKRA_id = 0; 
$conn = new mysqli('localhost', 'root', '' ,'rpms') or die(mysqli_error($conn));
if(isset($_POST['save'])){
    $mtKRA_no = $_POST['mtKRA_no'];   
    $mtKRA_name = $_POST['mtKRA_name'];
    $timestamp = date("Y-m-d H:i:s");
    $conn->query("INSERT INTO mtkra_tbl(mtKRA_no,mtKRA_name,date_added) VALUES ('$mtKRA_no','$mtKRA_name','$timestamp')") or die($conn->error);
    header('location:../displaymtkra.php?notif=added');
    
}
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $conn->query("DELETE FROM mtkra_tbl WHERE mtKRA_id=$id") or die($conn->error);
    header('location:../displaymtkra.php?notif=deleted');
}
if(isset($_POST['update'])){
    $mtKRA_id = $_POST['mtKRA_id'];
    $mtKRA_no = $_POST['mtKRA_no'];
    $mtKRA_name  = $_POST['mtKRA_name'];
     mysqli_query($conn,"UPDATE mtkra_tbl SET mtKRA_id='$mtKRA_id', mtKRA_no='$mtKRA_no', mtKRA_name='$mtKRA_name' WHERE mtKRA_id = '$mtKRA_id' ");
    header("location:../displaymtkra.php?notif=updated");
}
?>