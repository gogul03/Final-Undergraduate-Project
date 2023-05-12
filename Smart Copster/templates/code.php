<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_driver']))
{
    $driver_id = mysqli_real_escape_string($con, $_POST['delete_driver']);

    $query = "DELETE FROM drivers WHERE id='$driver_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Driver Deleted Successfully";
        header("Location: status.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Driver Not Deleted";
        header("Location: status.php");
        exit(0);
    }
}

if(isset($_POST['update_driver']))
{
    $driver_id = mysqli_real_escape_string($con, $_POST['driver_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

    $query = "UPDATE drivers SET name='$name', email='$email', phone='$phone', course='$course' WHERE id='$driver_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Driver Updated Successfully";
        header("Location: status.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Driver Not Updated";
        header("Location: status.php");
        exit(0);
    }

}


if(isset($_POST['save_driver']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $course = mysqli_real_escape_string($con, $_POST['course']);

    $query = "INSERT INTO drivers (name,email,phone,course) VALUES ('$name','$email','$phone','$course')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Driver Created Successfully";
        header("Location: driver-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Driver Not Created";
        header("Location: driver-create.php");
        exit(0);
    }
}

?>