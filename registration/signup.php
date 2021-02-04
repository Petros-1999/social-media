



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="main">

<div class="container">
    <div class="signup-content">
        <form method="POST" action="signup_h.php" class="signup-form">
            <h2>Sign up </h2>
            <div class="form-group">
                <input type="text" class="form-input" name="first_name" id="first_name" placeholder="write your first name,here"required/>
            </div>
            <div class="form-group">
                <input type="text" class="form-input" name="last_name" id="last_name" placeholder="write your last name,here"required/>
            </div>
            <div class="form-group">
                <input type="text" class="form-input" name="username" id="username" placeholder="write your username,here"required/>
            </div>
            <div class="form-group">
                <input type="email" class="form-input" name="email" id="email" placeholder="write your Email,here"required/>
            </div>
            <div class="form-group">
                <input type="password" class="form-input" name="password" id="password" placeholder="Password"required/>
                <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
            </div>
            <div class="form-group">
                <input type="password" class="form-input" name="password2" id="password2" placeholder="confirm your password"required/>
                <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
            </div>
            <div class="form-group">
                <input type="date" name="date_of_birth" id="date_of_birth" class="form-input" />
                <div class="form-group">
                <input type="radio"  name= "gender" type ="radio" value="male" class="form-input" required>male
                <input type="radio"  name= "gender" type ="radio" value="female" class="form-input" required>female
            
            </div>  
            </div>
            <div class="form-group">
                <input type="submit" name="submit" id="submit" class="form-submit submit" value="Sign up"/>
                
            </div>
        </form>
    </div>
</div>

</div>







 <!-- JS -->
 <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>


<?php /*

//before 
<form action ="signup_h.php"  method ="POST" >
<table></div><div  clas="button2">
<label><h1>Sign up</h1></label>
<tr><td>FIRSTNAME</td>
    <td><input name="first_name" value=""placeholder="write your first name,here"></td>
</tr>


<tr><td>LASTNAME</td>
    <td><input name="last_name" value="" placeholder="write your last name,here"></td>
</tr>
<tr><td>username</td>
    <td><input name="username" value=""placeholder="write your username,here"></td>
</tr>
<tr><td> Email</td>
    <td><input type="email" name = "email" value="" placeholder="write your Email,here"></td>
</tr>

<tr><td>PASSWORD</td>
    <td><input name="password" value="" type="password"></td>
</tr>

<tr><td>PASSWORD</td>
  <td><input name="password2" value="" type="password2"placeholder="confirm your password"></td>
</tr>

<tr><td>Birthday?</td></tr>
<tr><td><input type="date" name="date_of_birth"> </td></tr>

<tr><td>gender</td>
    <td>
       <input name= "gender" type ="radio" value="male"required>male
       <input name= "gender" type ="radio" value="female"required>female
</td>
</tr>

<td><input type="submit" value="signup"></td></tr>








//styled form inputs  


<div class="main">

<div class="container">
    <div class="signup-content">
        <form method="POST" action="signup_h.php" class="signup-form">
            <h2>Sign up </h2>
            <div class="form-group">
                <input type="text" class="form-input" name="first_name" id="first_name" placeholder="write your first name,here"required/>
            </div>
            <div class="form-group">
                <input type="text" class="form-input" name="last_name" id="last_name" placeholder="write your last name,here"required/>
            </div>
            <div class="form-group">
                <input type="text" class="form-input" name="username" id="username" placeholder="write your username,here"required/>
            </div>
            <div class="form-group">
                <input type="email" class="form-input" name="email" id="email" placeholder="write your Email,here"required/>
            </div>
            <div class="form-group">
                <input type="password" class="form-input" name="password" id="password" placeholder="Password"required/>
                <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
            </div>
            <div class="form-group">
                <input type="password" class="form-input" name="password2" id="password2" placeholder="confirm your password"required/>
                <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
            </div>
            <div class="form-group">
                <input type="date" name="date_of_birth" id="date_of_birth" class="form-input" />
                <div class="form-group">
                <input type="radio"  name= "gender" type ="radio" value="male" class="form-input" required>male
                <input type="radio"  name= "gender" type ="radio" value="female" class="form-input" required>female
            
            </div>  
            </div>
            <div class="form-group">
                <input type="submit" name="submit" id="submit" class="form-submit submit" value="Sign up"/>
                
            </div>
        </form>
    </div>
</div>

</div>



*/
?>