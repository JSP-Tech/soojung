<?php
include "connect.php";
$q="select * from team where teamid=".$_GET['pic_id'];
$rec=mysqli_fetch_array(mysql_query($q));
$data=$rec['photo'];
//header('Content-Length: '.strlen($data));
header("Content-type: image/".$rec['ext']);
echo $data;?>