
<?php
$KRA_name = $tobj_no = $tobj_name = "";
$edit_state = false;
$tobj_id = 0; 
$conn = new mysqli('localhost', 'root', '' ,'rpms') or die(mysqli_error($conn));
if(isset($_POST['save'])){
    $KRA_name  = $_POST['KRA_name'];
    $tobj_no = $_POST['tobj_no'];
    $tobj_name = $_POST['tobj_name'];
    $timestamp = date("Y-m-d H:i:s");
    $conn->query("INSERT INTO tobj_tbl(KRA_name,tobj_no,tobj_name,date_added) VALUES ('$KRA_name','$tobj_no','$tobj_name','$timestamp')") or die($conn->error);
    header('location:../displaytobj.php?notif=added');
    
}
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $conn->query("DELETE FROM tobj_tbl WHERE tobj_id=$id") or die($conn->error);
    header('location:../displaytobj.php?notif=deleted');
}
if(isset($_POST['update'])){
    $tobj_id = $_POST['tobj_id'];
    $KRA_name  = $_POST['KRA_name'];
    $tobj_no = $_POST['tobj_no'];
    $tobj_name = $_POST['tobj_name'];
    mysqli_query($conn,"UPDATE tobj_tbl SET tobj_id='$tobj_id', KRA_name='$KRA_name', tobj_no='$tobj_no', tobj_name='$tobj_name' WHERE tobj_id = '$tobj_id' ");
    header("location:../displaytobj.php?notif=updated");
}
?>
