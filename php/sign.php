<?php

$abc = 1;

$con = mysqli_connect('localhost','user','','test');

mysqli_query($con, "create table chandan ( id int ); ");
mysqli_query($con, "insert into chandan values(2); ");
mysqli_query($con, "insert into chandan values($abc); ");

?>
