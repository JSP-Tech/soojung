<?php
include "includes/connect.php";
$q="select * from team where teamid=".$_GET['pic_id'];
//$q="select * from team where teamid=8";
$rec=mysqli_fetch_array(mysqli_query($con,$q));
//if(!$rec) echo m
$data=$rec['photo'];
header('Content-Length: '.strlen($data));
header("Content-type: image/".$rec['ext']);
echo $data;?>