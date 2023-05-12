<?php include "sidebar.php" ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    

    <title>Driver View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Driver View Details 
                            <a href="status.php" class="btn btn-info btn-fill pull-right">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $driver_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM drivers WHERE id='$driver_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $driver = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>Driver Name</label>
                                        <p class="form-control">
                                            <?=$driver['name'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Driver Email</label>
                                        <p class="form-control">
                                            <?=$driver['email'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Driver Phone</label>
                                        <p class="form-control">
                                            <?=$driver['phone'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Driver Course</label>
                                        <p class="form-control">
                                            <?=$driver['course'];?>
                                        </p>
                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</body>
</html>
<?php include "footer.php"?>