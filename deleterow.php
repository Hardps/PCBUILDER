<?php
    include("config.php");
    if(isset($_POST['delete']))
    {
        $id = mysqli_real_escape_string($conn, $_POST['delete']);
    
        $query = "DELETE FROM cpu WHERE id='$id' ";
        $query_run = mysqli_query($conn, $query);
	    header('location:admin.php');
    }
?>