<?php
include ('../partials/connect.php');
$newid=$_GET['del_id'];

$sql="DELETE from PRODUCTS WHERE id='$newid'";

if (mysqli_query($connect,$sql)){
    header('location: productsshow.php');
}else{
    echo "Not deleted";
}

?>