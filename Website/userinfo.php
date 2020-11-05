<?php

$con = mysqli_connect('localhost','id14929712_root','M4l1kj33_root');

if($con){
echo "connection successful";


}else{
    echo "No connection";
}
mysqli_select_db($con, 'id14929712_userdata');
$email  = $_POST['email'];

$tell  = $_POST['tell'];
$message  = $_POST['message'];

$query = " insert into userinfodata  (email, tell, message)
values ('$email', '$tell','$message')";
mysqli_query($con,$query);
echo "$query";
mysqli_query($con,$query);







?>