<?php
    session_start();
    if (!isset($_SESSION["login"])) {
		header("location: login.php");
    }

    $id = "root";
    $pass = "";
    $db = "becomp";
    $server = "localhost";
    
    $link = mysqli_connect($server,$id,$pass,$db);

    $id = $_GET['id'];
	  $sql = "delete from produk where id = $id";
    mysqli_query($link,$sql);

    if (mysqli_affected_rows($link) > 0) {
        header("location:admin.php");
      } 
      else {
        echo "failed";
        echo "<br>";
        echo mysqli_error($link);
      }
?>