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
      <img src="logo (1).jpg" class='logo'/>
    </div>
    <div class='header'>
      <ul class='nav'>
        <li><a href='index.php' class='f'>Home</a></li>
        <li>About</li>
        <li>Service</li>
        <li>Contact Us</li>
      </ul>
    </div>
    <div class="a">
        <div class='reg'>
            <p class='b'>Registration</p>
            <form action="registration1.php" method="POST" enctype="multipart/form-data">
                <input type='text' placeholder='Enter your name' required='required' class='c' name='t1'/>
                <input type='text' placeholder='Enter your mobile number' required='required' class='c' name='t2'/>
                <input type='password' placeholder='Enter your password'  required='required'class='c' name='t3'/>
                <input type='password' placeholder='Confirm password' required='required' class='c' name='t4'/>
                <input type='file' class='g'name='f'/>
                <select class='h'name='t5'>
                    <option value='Group'>Group</option>
                    <option value='Voter'>Voter</option>
                </select>
                <input type='submit' value='Register' class='b2'/>
                <p class='e'>Already have an account? <a href='login.php' class='link'>Login here</a></p>
            </form>
        </div>
    </div>
    
</body>