<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<header>
<?php include 'header.php';?>
</header>
<main>
<div class="container col-sm-8 my-4 bg-light ">
        <div class="control-label">
              <legend class="legend-control bg-info text-white ">COT Indicator - Master Teacher</legend>
        </div>
    </div>

<?php
$conn = mysqli_connect("localhost","root","","rpms");
$db = mysqli_select_db($conn,"rpms");

$query = "SELECT * FROM mtindicator_tbl";
$query_run = mysqli_query($conn, $query);
?>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 id="exampleModalLabel"><strong>Add Indicator for Master Teacher</strong></h5>
      </div>
      <div class="modal-body">
            <form action="processindicator.php" class="form-group" method="POST">
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="level" class="control-label"><strong>Indicator No.</strong></label>
                            <input type="text" name="indicator_no" id="" class="form-control" width="500" required> 
                        </div>
                        <div class="col-sm-6">
                            <label for="level" class="control-label"><strong>Indicator Name</strong></label>
                            <textarea class="form-control" name="indicator_name" rows="5" required></textarea>
                        </div>
                    </div>
                    <div>
                            <button type="submit" class="btn-sm btn-primary my-4" name="mtsave">Save</button>
                            <input type="button" value="Cancel" data-dismiss="modal" class="btn-sm btn-danger my-4" aria-label="Cancel" />

                    </div>
            </form>
         </div>
        <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<div class="container col-sm-8 my-4 bg-light">
<input type="button" value="Add Indicator" class="btn-sm btn-primary my-4" style="margin-left:87%;" data-toggle="modal" data-target="#exampleModal"/>
<table class="table table-bordered" style="background-color: white; table-layout: 10;">
    <thead class="legend-control bg-info text-white " >
        <tr>
            <th>Indicator No</th>
            <th>Indicator Name</th>
            <th width=200;><center>Action</center></th>
        </tr>
    </thead>
<?php
    if($query_run){
        while($row = mysqli_fetch_array($query_run))
        {
            ?>
                <tbody>
                    <tr>
                        <th><?php echo $row['indicator_no'];?></th>
                        <th><?php echo $row['indicator_name'];?></th>
                        <form action="mt_edit.php" method="post">
                            <input type="hidden" name="indicator_id" value ="<?php echo $row['indicator_id']?>">
                            <th>
                                <center>

                                <a class="btn-sm btn-success my-4" href="mt_edit.php?mtupdate=<?php echo $row['indicator_id'];?>">Edit</a>
                                    
                        </form>
                                    <a class="btn-sm btn-danger my-4" onclick="return confirm('Delete Record?'); "href="processindicator.php?mtdelete=<?php echo $row['indicator_id'];?>">Delete</a>
                                <center>

                            </th>
            
                    </tr>    
                </tbody>
            
            <?php
            
        }

    }
    else
    {
        echo "No record found";

    }

?>


</table>

</div>

</main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

