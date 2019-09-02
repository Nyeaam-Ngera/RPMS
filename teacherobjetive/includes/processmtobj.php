
<?php
$mtKRA_name = $mtobj_no = $mtobj_name = "";
$edit_state = false;
$mtobj_id = 0; 
$conn = new mysqli('localhost', 'root', '' ,'rpms') or die(mysqli_error($conn));
if(isset($_POST['save'])){
    $mtKRA_name  = $_POST['KRA_name'];
    $mtobj_no = $_POST['mtobj_no'];
    $mtobj_name = $_POST['mtobj_name'];
    $timestamp = date("Y-m-d H:i:s");
    $conn->query("INSERT INTO mtobj_tbl(mtKRA_name,mtobj_no,mtobj_name,date_added) VALUES ('$mtKRA_name','$mtobj_no','$mtobj_name','$timestamp')") or die($conn->error);
    header('location:../displaymtobj.php?notif=added');
    
}
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $conn->query("DELETE FROM mtobj_tbl WHERE mtobj_id=$id") or die($conn->error);
    header('location:../displaymtobj.php?notif=deleted');
}
if(isset($_POST['update'])){
    $mtobj_id = $_POST['mtobj_id'];
    $mtKRA_name  = $_POST['mtKRA_name'];
    $mtobj_no = $_POST['mtobj_no'];
    $mtobj_name = $_POST['mtobj_name'];
    mysqli_query($conn,"UPDATE mtobj_tbl SET mtobj_id='$mtobj_id', mtKRA_name='$mtKRA_name', mtobj_no='$mtobj_no', mtobj_name='$mtobj_name' WHERE mtobj_id = '$mtobj_id' ");
    header("location:../displaymtobj.php?notif=updated");
}
?>