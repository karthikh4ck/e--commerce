<?php

include("../partials/connect.php");
$email=$_POST['email'];
$msg=$_POST['msg'];

$sql="INSERT INTO CONTACT(email,msg) VALUES('$email','$msg')";

$connect->query($sql);

?>