<?php

$rubric_lvl = $level_name = $rubric_description = "";
$edit_state = false;
$rubric_id = 0;





$mysqli = new mysqli('localhost', 'root', '' ,'rpms') or die(mysqli_error($mysqli));

if(isset($_POST['save'])){
    $rubric_lvl  = $_POST['rubric_lvl'];
    $level_name = $_POST['level_name'];
    $rubric_description = $_POST['rubric_description'];


    $mysqli->query("INSERT INTO trubric_tbl(rubric_lvl,level_name,rubric_description) VALUES ('$rubric_lvl','$level_name','$rubric_description')") or die($mysqli->error);


    header('location:../displaytRubric.php?notif=added');
    
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM trubric_tbl WHERE rubric_id=$id") or die($mysqli->error);
    header('location:../displaytRubric.php?notif=deleted');
}

if(isset($_POST['update'])){
    $rubric_id = $_POST['rubric_id'];
    $rubric_lvl = $_POST['rubric_lvl'];
    $level_name = $_POST['level_name'];
    $rubric_description = $_POST['rubric_description'];

    mysqli_query($mysqli,"UPDATE trubric_tbl SET rubric_lvl = '$rubric_lvl', level_name = '$level_name', rubric_description = '$rubric_description' WHERE rubric_id = '$rubric_id' ");
    header("location:../displaytRubric.php?notif=updated");

}

?>
  