
<?php
$KRA_name = $tobj_name = $main_mov = $supp_mov = "";
$edit_state = false;
$mov_id = 0; 
$conn = new mysqli('localhost', 'root', '' ,'rpms') or die(mysqli_error($conn));
if(isset($_POST['save'])){
    $KRA_name  = $_POST['KRA_name']; 
    $tobj_name = $_POST['tobj_name'];
    $main_mov = $_POST['main_mov'];
    $supp_mov = $_POST['supp_mov'];
    $timestamp = date("Y-m-d H:i:s");
    $conn->query("INSERT INTO tmov_tbl(KRA_name,tobj_name,main_mov,supp_mov,date_added) VALUES ('$KRA_name','$tobj_name','$main_mov','$supp_mov','$timestamp')") or die($conn->error);
    header('location:../displaytmov.php?notif=added');
    
} 
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $conn->query("DELETE FROM tmov_tbl WHERE tmov_id=$id") or die($conn->error);
    header('location:../displaytmov.php?notif=deleted');
}
if(isset($_POST['update'])){
    $tmov_id = $_POST['tmov_id'];
    $KRA_name  = $_POST['KRA_name'];
    $tobj_name = $_POST['tobj_name'];
    $main_mov = $_POST['main_mov'];
    $supp_mov = $_POST['supp_mov'];
    mysqli_query($conn,"UPDATE tmov_tbl SET tmov_id='$tmov_id', KRA_name='$KRA_name', tobj_name='$tobj_name', main_mov='$main_mov', supp_mov='$supp_mov' WHERE tmov_id = '$tmov_id' ");
    header("location:../displaytmov.php?notif=updated");
}
?>