<?php
$a=$_POST['t1'];
$b=$_POST['t2'];
$c=$_POST['t3'];
$d=$_POST['t4'];
$tmp=$_FILES['f']['tmp_name'];
$act=$_FILES['f']['name'];
$e=$_POST['t5'];
if($c!=$d){
    echo"<script>
    alert('Password do not match');
    window.location='http://localhost/coaching(program)/votingsystem/registration.php';
    </script>";
}
else{
    if(move_uploaded_file($tmp,$act)){
        $con=mysqli_connect('localhost','root','mitali30','votingsystem');
        $q="insert into registration(name,mobile,password,confirm_password,photo,standard) values('$a','$b','$c','$d','$act','$e')";
        $rs=mysqli_query($con,$q);
        if($rs){
            echo "<script>
            alert('Register Successfully');
            window.location='http://localhost/coaching(program)/votingsystem/login.php';
            </script>";
        }
        else{
            echo "Error";
        }
    }
}
?>