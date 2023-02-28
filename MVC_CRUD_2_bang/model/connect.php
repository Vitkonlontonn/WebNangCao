<?php
function connect() {
 $connect = mysqli_connect('localhost', 'root', '', 'chuyen_sau');
mysqli_set_charset($connect, 'utf8'); 
return $connect;  
}
