
<?php include "sidebar.php" ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    
    <title>Status Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Driver Edit 
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
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="driver_id" value="<?= $driver['id']; ?>">

                                    <div class="mb-3">
                                        <label>Offence Type</label>
                                        <input type="text" name="name" value="<?=$driver['name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Driver Email</label>
                                        <input type="email" name="email" value="<?=$driver['email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Vehicle Number</label>
                                        <input type="text" name="phone" value="<?=$driver['phone'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Status</label>
                                        <input type="text" name="course" value="<?=$driver['course'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_driver" class="btn btn-info btn-fill pull-right">
                                            Update 
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4> No Such Id Found</h4>";
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