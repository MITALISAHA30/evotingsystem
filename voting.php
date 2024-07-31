<?php
    session_start();
    $con=mysqli_connect('localhost','root','mitali30','votingsystem');
    $votes=$_POST['groupvotes'];
    $totalvotes=$votes+1;
    $gid=$_POST['groupid'];
    $uid=$_SESSION['id'];

    //echo "update `registration` set status=1 where id='$uid'";
    $updatestatus=mysqli_query($con,"update `registration` set status=1 where id='$uid'");
    if( $updatestatus){
    
        //echo "update `registration` set votes='$totalvotes' where id='$gid'";
         $updatevotes=mysqli_query($con,"update `registration` set votes='$totalvotes' where id='$gid'");
    
        $getgroups=mysqli_query($con,"select id,name,photo,votes from `registration` where standard='group'");
        $groups=mysqli_fetch_all($getgroups,MYSQLI_ASSOC);
        $_SESSION['groups']=$groups;
        $_SESSION['status']=1;
        echo "
        <script>
        alert('Voting successful');
        window.location='http://localhost/coaching(program)/votingsystem/dashboard.php';
        </script>
        ";
    }
    else{
        echo "
        <script>
        alert('Technical Error! Please try again after some time');
        window.location='http://localhost/coaching(program)/votingsystem/dashboard.php';
        </script>
        ";
    }
?>