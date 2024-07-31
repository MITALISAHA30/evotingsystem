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
<form action="login1.php" method ="POST">
    <div class="a">
        <div class='log'>
            <p class='b'>Login</p>
            <input type='text' placeholder='Enter your name' class='c' required='required' name='t1'/>
            <input type='text' placeholder='Enter your mobile number' class='c' required='required' name='t2'/>
            <input type='password' placeholder='Enter your password' class='c'required='required'  name='t3'/>
            <select class='d' name='t4'>
                <option value='Group'>Group</option>
                <option value='Voter'>Voter</option>
            </select>
            <input type='submit' value='Login' class='b2'/>
            <p class='e'>Don't have an account? <a href='registration.php' class='link'>Register here</a></p>
        </div>
    </div>
    </form>
</body>
</html>