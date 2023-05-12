
    <?php
    require 'db_connect.php';
    include "sidebar.php" ?>
    <?php

    $msg = '';
    $msgClass = '';
    
    if(isset($_POST['submit'])){
        $days        = $_POST['days'];
        $offences     = $_POST['offences'];
       

        $sql = "INSERT INTO bar_chart(days, offences) VALUES('$days', '$offences')";
        $result = mysqli_query($conn, $sql);
        if($result) {
            $msg = "Data inserted successfully";
            $msgClass="alert-success";
        }
        else {
            $msg = "Data not inserted";
            $msgClass="alert-danger";
        }
    }
    ?>
 


 <?php 
   
if (isset($_POST['del_data'])) {
	$query="DELETE FROM bar_chart WHERE id=".$_POST['id'];
	$result = mysqli_query($conn, $query);
	if($result){
        $msg= "Data deleted successfully";
        $msgClass="alert-success";
	}
	else {
        $msg= "Data deleted successfully";
        $msgClass="alert-danger";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CDN -->
    
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
      <link rel="stylesheet" href="https://cdn.datatables.net/responsive/1.0.7/css/responsive.dataTables.min.css">

      <!-- Modal CSS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
    
   
    <!-- Title  -->
    <title>Graph</title>   
    <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #04AA6D;
  color: white;
}
</style>
 </head>

  <body>
    
    <div class = "container" style = "margin-top: 40px; padding: 30px;">
    <?php
     if (isset($msg)) { ?>
        <div class="form-group">
            <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?>
            </div>
        </div>
        <?php
        }
	?>
  
     

   
  <div class="card">
    <table id="example" class="display responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th><b>No#</th>
                <th>Date & Time</th>
                <th>Days</th>
                <th>No.of caught offences</th>
              
                <th>Action</th>
            </tr>
        </thead>
        <tbody>


<?php
    require 'db_connect.php';
    $sql = "SELECT * FROM bar_chart";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $i = 0;
        while($row = $result->fetch_assoc()) {
            $time          =  $row["time"];
            $days      =  $row["days"];       
            $offences   =  $row["offences"];        
           
?>

            <tr>
                <td><?php $i++; echo $i; ?></td>
                <td><?php echo $time; ?></td>
                <td><?php echo $days; ?></td>
                <td><?php echo $offences; ?></td>
                
                <td>
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                        
                        <a href="performance.php? id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" name="del_data"><i class="fas fa-trash"></i></button></a>
                      </form>
                </td>
             <?php }  ?>
            </tr>
         <?php } ?>  
     </tbody>
  </table>



  <!-- The Modal -->
  
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Register to view the performance</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
            <label><b>Days :</label>
                <input type="text" name="days" class="form-control" placeholder="Enter Name">
            </div>
          
              <div class="form-group">
              <label><b>No.of offences caught :</label>
                <input type="text" name="offences" class="form-control" placeholder="No.of offences">
            </div>

              
            <input type="submit" value="Submit" name="submit" class="btn btn-success btn-sm">
           </form> 
        </div>
        
        <!-- Modal footer -->
       
      </div>
    </div>
  </div>



    

    <script src="https://code.jquery.com/jquery-3.4.0.js"></script>

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    <!-- Style CSS -->
    </body>
</html>
<?php include "footer.php"?>