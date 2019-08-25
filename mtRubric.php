<header>
<?php include 'header.php'; ?>
</header>

<main>
<div class="container col-sm-6 my-4 bg-light ">
    <form action="includes/processmtrubric.php" class="form-group sm" method="POST">

    <legend class="legend-control bg-primary text-white ">Rubric Level Summary for Master Teacher</legend>
        <div class="row">
            <div class="col-sm-6">
                <label for="level" class="control-label"><strong>Rubric Level</strong></label>
                <input type="number" name="rubric_lvl" id="rubric-lvl" class="form-control" width="500" placeholder="Enter the rubric level..."> 
            </div>

            <div class="col-sm-6">
                <label for="level-name" class="control-label"><strong>Level Name</strong></label>
                <input type="text" name="level_name" id="" class="form-control" width="500" placeholder="Enter the Level Name..."> 
            </div>
        </div>
                    
            <div>
                <label for="description" class="control-label w-25 "><strong>Description</strong></label>
                <textarea name="rubric_description" id="rubric-description" cols="5" rows="5" class="form-control" placeholder="Enter the description..."></textarea>
            </div>
            <div class="row">
                <div class="col-sm-12">
                <button type="submit" class="btn btn-info my-4" name="save">Save</button>

                <a href="displaytRubric.php" class="btn btn-primary my-4" role="button">Show Rubrics</a>
                </div>

            </div>
        </form>
        </div>
    

</main>

<footer>

</footer>