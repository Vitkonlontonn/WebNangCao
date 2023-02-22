<?php 
$connect = mysqli_connect('localhost','root','', 'chuyen_sau' );
mysqli_set_charset( $connect, 'utf8' );

//$each =mysqli_fetch_array($result);

switch ($action) {
    case '':
        $sql = "select * from sinh_vien";
        $result = mysqli_query($connect,$sql);
        break;
    case 'store':
        
        $sql =" insert into sinh_vien (ten_sv) value ('$ten_sv')";
        mysqli_query($connect, $sql);
      break;
    
    case 'edit':

      break;
      case 'update':

        break;
        case 'delete':

            break;
    default:
    echo"Không nhập vớ vẩn";
      
  }