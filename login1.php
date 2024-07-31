<?php
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$d=$_POST['t4'];
$con=mysqli_connect('localhost','root','mitali30','votingsystem');
$q="select * from registration where name='$a' and mobile='$b' and password='$c' and standard='$d'";
$rs=mysqli_query($con,$q);
while($data=mysqli_fetch_array($rs)){
    $q="select name,photo,votes from registration where standard='group'";
    $rsgrp=mysqli_query($con,$q);
    if(mysqli_num_rows($rsgrp)>0){
    $groups=mysqli_fetch_all($rsgrp,MYSQLI_ASSOC);
        session_start();
        $_SESSION['groups']=$groups;
    }
    $_SESSION['status']=$data['status'];
    $_SESSION['id']=$data['id'];
    $_SESSION['data']=$data;
echo"
<script>window.location='http://localhost/coaching(program)/votingsystem/dashboard.php';</script>";
}
?>