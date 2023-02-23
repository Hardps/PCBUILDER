<?php
    include("config.php");
    if(isset($_GET['id']))
    {
        $id = mysqli_real_escape_string($conn, $_GET['id']);
    
        $query = "delete FROM cpu WHERE id='$id' ";
        $query_run = mysqli_query($conn, $query);
	    header('location:admin.php');
    }
    if(isset($_GET['mid']))
    {
        $id = mysqli_real_escape_string($conn, $_GET['mid']);
    
        $query = "delete FROM motherboard WHERE id='$id' ";
        $query_run = mysqli_query($conn, $query);
	    header('location:admin.php');
    }
    if(isset($_GET['rid']))
    {
        $id = mysqli_real_escape_string($conn, $_GET['rid']);
    
        $query = "delete FROM ram WHERE id='$id' ";
        $query_run = mysqli_query($conn, $query);
	    header('location:admin.php');
    }
    if(isset($_GET['gid']))
    {
        $id = mysqli_real_escape_string($conn, $_GET['gid']);
    
        $query = "delete FROM gpu WHERE id='$id' ";
        $query_run = mysqli_query($conn, $query);
	    header('location:admin.php');
    }
    if(isset($_GET['pid']))
    {
        $id = mysqli_real_escape_string($conn, $_GET['pid']);
    
        $query = "delete FROM psu WHERE id='$id' ";
        $query_run = mysqli_query($conn, $query);
	    header('location:admin.php');
    }
    if(isset($_GET['sid']))
    {
        $id = mysqli_real_escape_string($conn, $_GET['sid']);
    
        $query = "delete FROM storage WHERE id='$id' ";
        $query_run = mysqli_query($conn, $query);
	    header('location:admin.php');
    }
    if(isset($_GET['cid']))
    {
        $id = mysqli_real_escape_string($conn, $_GET['cid']);
    
        $query = "delete FROM cases WHERE id='$id' ";
        $query_run = mysqli_query($conn, $query);
	    header('location:admin.php');
    }
    if(isset($_GET['coid']))
    {
        $id = mysqli_real_escape_string($conn, $_GET['coid']);
    
        $query = "delete FROM cool WHERE id='$id' ";
        $query_run = mysqli_query($conn, $query);
	    header('location:admin.php');
    }
    if(isset($_GET['moid']))
    {
        $id = mysqli_real_escape_string($conn, $_GET['moid']);
    
        $query = "delete FROM monitor WHERE id='$id' ";
        $query_run = mysqli_query($conn, $query);
	    header('location:admin.php');
    }
?>
