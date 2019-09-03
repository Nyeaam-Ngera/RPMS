<?php
$conn = mysqli_connect('localhost', 'root', '' ,'rpms') or die(mysqli_error($conn));
if(isset($_POST['tsave'])){
   
    $indicator_no = $_POST['indicator_no'];
    $indicator_name = $_POST['indicator_name'];
    $query = "INSERT INTO tindicator_tbl(indicator_no,indicator_name) VALUES ('$indicator_no','$indicator_name')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script>alert("Successfully Added!")</script>'; 
        echo '<script>window.location.assign("t_index.php")</script>';

    }

    else 
    {
        echo '<script>alert("Data not Save!")</script>'; 

    }
}

if(isset($_POST['mtsave'])){
   
    $indicator_no = $_POST['indicator_no'];
    $indicator_name = $_POST['indicator_name'];
    $query = "INSERT INTO mtindicator_tbl(indicator_no,indicator_name) VALUES ('$indicator_no','$indicator_name')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script>alert("Successfully Added!")</script>'; 
        echo '<script>window.location.assign("mt_index.php")</script>';

    }

    else 
    {
        echo '<script>alert("Data not Save!")</script>'; 

    }

}

if(isset($_POST['tupdate']))
                    
{

    $indicator_id = $_POST['indicator_id'];
    $query = "SELECT * FROM tindicator_tbl where indicator_id = '$indicator_id'";

    $indicator_no = $_POST['indicator_no'];
    $indicator_name = $_POST['indicator_name'];

    $query = "UPDATE tindicator_tbl SET indicator_no = '$indicator_no', indicator_name='$indicator_name' where indicator_id = '$indicator_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
 
        echo '<script>alert("Indicator Updated!")</script>'; 
        echo '<script>window.location.assign("t_index.php")</script>';
    }
    else
    {
        echo '<script>alert("Indicator Not Update!")</script>';
    }
    
}


if(isset($_POST['mtupdate']))
                    
{

    $indicator_id = $_POST['indicator_id'];
    $query = "SELECT * FROM mtindicator_tbl where indicator_id = '$indicator_id'";
    
    $indicator_no = $_POST['indicator_no'];
    $indicator_name = $_POST['indicator_name'];

    $query = "UPDATE mtindicator_tbl SET indicator_no = '$indicator_no', indicator_name='$indicator_name' where indicator_id = '$indicator_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
 
        echo '<script>alert("Indicator Updated!")</script>'; 
        echo '<script>window.location.assign("mt_index.php")</script>';
    }
    else
    {
        echo '<script>alert("Indicator Not Update!")</script>';
    }
    
}


if(isset($_GET['tdelete']))
                    
{

    $indicator_id = $_GET['tdelete'];
    $query = "DELETE FROM tindicator_tbl  where indicator_id = '$indicator_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
 
        echo '<script>alert("Indicator Deleted!")</script>'; 
        echo '<script>window.location.assign("t_index.php")</script>';
    }
    else
    {
        echo '<script>alert("Indicator Not Deleted!")</script>';
    }
    
}

if(isset($_GET['mtdelete']))
                    
{

    $indicator_id = $_GET['mtdelete'];
    $query = "DELETE FROM mtindicator_tbl  where indicator_id = '$indicator_id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
 
        echo '<script>alert("Indicator Deleted!")</script>'; 
        echo '<script>window.location.assign("mt_index.php")</script>';
    }
    else
    {
        echo '<script>alert("Indicator Not Deleted!")</script>';
    }
    
}



if(isset($_POST['tcriteriasave'])){
   
    $Criteria = $_POST['Criteria'];
    $query = "INSERT INTO tcotratingsheet(Criteria) VALUES ('$Criteria')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script>alert("Successfully Added!")</script>'; 
        echo '<script>window.location.assign("tcotrating_index.php")</script>';

    }

    else 
    {
        echo '<script>alert("Data not Save!")</script>'; 

    }
}



if(isset($_POST['tcriteriaupdate']))
                    
{

    $tCriteriaID = $_POST['tCriteriaID'];
    $query = "SELECT * FROM tcotratingsheet where tCriteriaID = '$tCriteriaID'";
    
    $Criteria = $_POST['Criteria'];

    $query = "UPDATE tcotratingsheet SET Criteria = '$Criteria' where tCriteriaID = '$tCriteriaID'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
 
        echo '<script>alert("Criteria Updated!")</script>'; 
        echo '<script>window.location.assign("tcotrating_index.php")</script>';
    }
    else
    {
        echo '<script>alert("Criteria Not Update!")</script>';
    }
    
}



if(isset($_GET['tcriteriadelete']))
                    
{

    $tCriteriaID = $_GET['tcriteriadelete'];
    $query = "DELETE FROM tcotratingsheet  where tCriteriaID = '$tCriteriaID'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
 
        echo '<script>alert("Criteria Deleted!")</script>'; 
        echo '<script>window.location.assign("tcotrating_index.php")</script>';
    }
    else
    {
        echo '<script>alert("Criteria Not Deleted!")</script>';
    }
    
}



if(isset($_POST['mtcriteriasave'])){
   
    $Criteria = $_POST['criteria'];
    $query = "INSERT INTO mtcotratingsheet(criteria) VALUES ('$Criteria')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo '<script>alert("Successfully Added!")</script>'; 
        echo '<script>window.location.assign("mtcotrating_index.php")</script>';

    }

    else 
    {
        echo '<script>alert("Data not Save!")</script>'; 

    }
}


if(isset($_GET['mtcriteriadelete']))
                    
{

    $mt_criteriaid = $_GET['mtcriteriadelete'];
    $query = "DELETE FROM mtcotratingsheet  where mt_criteriaid = '$mt_criteriaid'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
 
        echo '<script>alert("Criteria Deleted!")</script>'; 
        echo '<script>window.location.assign("mtcotrating_index.php")</script>';
    }
    else
    {
        echo '<script>alert("Criteria Not Deleted!")</script>';
    }
    
}


if(isset($_POST['mtcriteriaupdate']))
                    
{

    $mt_criteriaid = $_POST['mt_criteriaid'];
    $query = "SELECT * FROM mtcotratingsheet where mt_criteriaid = '$mt_criteriaid'";
    
    $Criteria = $_POST['criteria'];

    $query = "UPDATE mtcotratingsheet SET criteria = '$Criteria' where mt_criteriaid = '$mt_criteriaid'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
 
        echo '<script>alert("Criteria Updated!")</script>'; 
        echo '<script>window.location.assign("mtcotrating_index.php")</script>';
    }
    else
    {
        echo '<script>alert("Criteria Not Update!")</script>';
    }
    
}

?>
