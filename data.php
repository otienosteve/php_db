<?php
$user=$_POST['username'];
$passw=$_POST['pass'];
$level=$_POST['level'];
$id=$_POST['id'];

echo "You entered the values ".$user." ".$passw." ".$level." ".$id;
$conn=mysqli_connect('localhost','root','','school');
$upd=mysqli_query($conn,"select level from users where id='$id';");
$result=mysqli_fetch_row($upd);
$result+=12;
$upda=mysqli_query($conn,"update table users set level='$result' where id='$id';");
//$add=mysqli_query($conn,"insert into users values ('$upd','$user','$passw','$level');");