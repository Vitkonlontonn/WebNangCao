<?php 
$connect = mysqli_connect('localhost','root','', 'chuyen_sau' );
mysqli_set_charset( $connect, 'utf8' );
$sql = "select * from mon_an where ten ='$mon'";
$result = mysqli_query($connect,$sql);
$each =mysqli_fetch_array($result);

