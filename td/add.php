<?php

include("dbcon.php");

if(isset($_POST['send'])){
  $title = $_POST['title'];
      if(empty($title)){
        header("location: index.php?message=error");
      }
      else{
        $query = "INSERT INTO todo(`title`) VALUE('$title');";
        $result = mysqli_query($con,$query);
        if(!$result){
          die("Query Failed ..." . mysqli_connect_error());
        }else{
          header("location: index.php?message=success");
        }
      }
}else{
  header("location: index.php?message=h");
}