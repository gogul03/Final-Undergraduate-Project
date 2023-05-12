<?php include "sidebar.php" ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   

    <title>Driver Offence Details</title>
</head>
<body>
  
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Driver Offence Details
                            <a href="driver-create.php" class="btn btn-info btn-fill pull-right">Add Details</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Offence Type</th>
                                    <th>Email</th>
                                    <th>Vehicle Number</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM drivers";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $driver)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $driver['id']; ?></td>
                                                <td><?= $driver['name']; ?></td>
                                                <td><?= $driver['email']; ?></td>
                                                <td><?= $driver['phone']; ?></td>
                                                <td><?= $driver['course']; ?></td>
                                                <td>
                                                    <a href="driver-view.php?id=<?= $driver['id']; ?>" class="btn btn-info btn-fill pull-right">View</a>
                                                    <a href="driver-edit.php?id=<?= $driver['id']; ?>" class="btn btn-info btn-fill pull-right">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_driver" value="<?=$driver['id'];?>" class="btn btn-info btn-fill pull-right">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

   

</body>
</html>
<?php include "footer.php"?>