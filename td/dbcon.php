<?php

  define("HOST",'localhost');
  define("DBNAME",'TODOLIST');
  define("USERNAME",'root');
  define("PASS",'');

$con = mysqli_connect(HOST,USERNAME,PASS,DBNAME);

if(!$con){
  die("Connection Failed");
}
