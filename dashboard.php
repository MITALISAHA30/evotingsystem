<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class='header1'>
      <img src='logo (1).jpg' class='logo'/>
</div>
<div class='header'>
  <ul class='nav'>
    <li><a href='index.php' class='f'>Home</a></li>
    <li>About</li>
    <li>Service</li>
    <li>Contact Us</li>
  </ul>
</div>
<div class='ab'>
  <button type='submit' class='b3'><a href="login.php" class='f'>Back</a></button>
  <button type='submit' class='b3'><a href="index.php" class='f'>Log Out</a></button>
  <?php
  session_start();
  if(isset($_SESSION['groups'])){
    $groups=$_SESSION['groups'];
    for($i=0;$i<count($groups);$i++){
      ?>
      <div class='grp'>
        <p class='n1'>Group: <?php echo $groups[$i]['name'];?></p>
        <img src="<?php echo $groups[$i]['photo'];?>" class="img" alt='Group Image' >
        <p class='n2'>Votes: <?php echo $groups[$i]['votes'];?></p>
      <form action="voting.php" method="POST">
      <input type="hidden" name='groupid' value='<?php echo $groups[$i]['id'];?>'>
        <input type="hidden" name='groupvotes' value="<?php echo $groups[$i]['votes'];?>">
        <?php
        if($_SESSION['status']==1)
        {
          ?>
          <button class='b5'>Voted</button>
          <?php
        }
        else
        {
          ?>
          <input type="submit" class='b4' value='Vote'>
          <?php
        }
        ?>
      </form>
  </div>
      <?php
    }
  }
  
  ?>
   
  <div class='user'>
    <?php
    $data=$_SESSION['data'];
    if($_SESSION['status']==1)
    {
      $status='<span class="ts">Voted </span>';
    }
    else
    {
      $status='<span class="td"> Not Voted </span>';
    }
    ?>
    <img src=" <?php echo $data['photo'];?>" class="uimg" alt='User Image' >
    <table>
      <tr style="height:55px">
        <td class='u1'>Name</td>
        <td  class='u1'><?php echo $data['name'];?></td>
      </tr>
      <tr style="height:55px">
        <td class='u1'>Mobile</td>
        <td  class='u1'><?php echo $data['mobile'];?></td>
      </tr>
      <tr style="height:55px">
        <td class='u1'>Status</td>
        <td  class='u1'><?php echo $status;?></td>
      </tr>
    </table>
  </div>
</div>
</body>
</html>