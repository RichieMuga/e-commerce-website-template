<?php
$conn= new msqli('localhost','root','','eccomerce project');
if (isset($_POST['submit']) {
    $name = $conn-> mysql_real_escape_string($_POST['name']);
    $email = $conn-> mysql_real_escape_string($_POST['email']);
    $password =$conn-> mysql_real_escape_string($_POST['password']);
    $cpassword = $conn-> mysql_real_escape_string($_POST['cpassword']);

    if ($name =="" || $email=="" || $password != $cpassword) {
        $msg="Please fill in the fields";
        else {
          $sql=$conn-> query("SELECT Id FROM users WHERE email='email'");
          if (sql->num_rows >0) {
            $msg="email already exists";
            else {
              $token='qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCBNM1234567890';
              $token=str_shuffle($str);
              substr($token,0,5);
            conn->
            }
          }
        }
    }
}
?>

<html>
    <title>Register</title>
    <head><meta:charset="UTF-8"></meta:charset>
    <meta name="viewport"
    content="width=device-width,user-scalable=no, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    </head>
<body>
    <div class="container">
    <div>
        <div class="row justify-justify-content-center">
            <div class="col-md-6 col-md-offset-3" align="center">
        <form method="POST" action="Register.php">
            <input class="form-control" name="Name" placeholder= Name...>
            <input class="form-control" name="email" type=email placeholder= Email...>
            <input class="form-control" name="password" type=password placeholder= Password...>
            <input class="form-control" name="cpassword" type=password placeholder= Confirmation Password...>
            <input class="btn-primary" type="submit" name="submit" value="Register" >
        </div>
        </div>
    </div>
    
    
</body>
    
</html>
