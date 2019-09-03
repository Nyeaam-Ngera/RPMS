
<?php
$mtKRA_name = $mtobj_name = $mtmain_mov = $mtsupp_mov = "";
$edit_state = false;
$mtmov_id = 0; 
$conn = new mysqli('localhost', 'root', '' ,'rpms') or die(mysqli_error($conn));
if(isset($_POST['save'])){
    $mtKRA_name  = $_POST['mtKRA_name']; 
    $mtobj_name = $_POST['mtobj_name'];
    $mtmain_mov = $_POST['mtmain_mov'];
    $mtsupp_mov = $_POST['mtsupp_mov'];
    $timestamp = date("Y-m-d H:i:s");
    $conn->query("INSERT INTO mtmov_tbl(mtKRA_name,mtobj_name,mtmain_mov,mtsupp_mov,date_added) VALUES ('$mtKRA_name','$mtobj_name','$mtmain_mov','$mtsupp_mov','$timestamp')") or die($conn->error);
    header('location:../displaymtmov.php?notif=added');
    
} 
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $conn->query("DELETE FROM mtmov_tbl WHERE mtmov_id=$id") or die($conn->error);
    header('location:../displaymtmov.php?notif=deleted');
}
if(isset($_POST['update'])){
    $mtmov_id = $_POST['mtmov_id'];
    $mtKRA_name  = $_POST['mtKRA_name'];
    $mtobj_name = $_POST['mtobj_name'];
    $mtmain_mov = $_POST['mtmain_mov'];
    $mtsupp_mov = $_POST['mtsupp_mov'];
    mysqli_query($conn,"UPDATE mtmov_tbl SET mtmov_id='$mtmov_id', mtKRA_name='$mtKRA_name', mtobj_name='$mtobj_name', mtmain_mov='$mtmain_mov', mtsupp_mov='$mtsupp_mov' WHERE mtmov_id = '$mtmov_id' ");
    header("location:../displaymtmov.php?notif=updated");
}
?>