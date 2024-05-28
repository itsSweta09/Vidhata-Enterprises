<?php

$nameErr = $emailErr = $passErr= "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_POST['username']))
    {
        $nameErr = "enter name";
    }
    else{
    $name = $_POST['username'];
$contains_alpha = preg_match('/[a-z]/',$name);
$contains_digit = preg_match('/[0-9]/',$name);
$len = strlen($name) >= 6 && strlen($name) <= 14;
if(!($contains_alpha && $contains_digit && $len))
{
    $nameErr = "invalid name";

}
    }

if(empty($_POST['email_address']))
{
    $emailErr = "enter email";
}
else
$email = $_POST['email_address'];

if(empty($_POST['password']))
{
    $passErr = "enter password";
}
else{
$pass = $_POST['password'];
$contains_alpha = preg_match('/[a-z]/' , $pass);
$contains_digit = preg_match('/[0-9]/' ,$pass);
if( $contains_alpha && $contains_digit)
$passErr = "invalid pass";
}

if(!(empty($_POST['username']) && empty($_POST['email_address']) && empty($_POST['password'])))
{echo ("name is" ,$name);
echo("email is" ,$email);
echo("pass is", $pass);}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="practice.php" method = "post">
        <label>username</label>
        <br>
        <input type="text" name = "username"/>
        <span class = "error">*<?php echo $nameErr; ?></span>
        <br><br>
        <label>email_address</label>
        <br>
        <input type="text" name = "email_address"/>
        <span class = "error">*<?php echo $emailErr;   ?></span>
        <br><br>
        <label>password</label>
        <br>
        <input type="text" name = "password"/>
        <span class = "error">*<?php echo $passErr;  ?></span>
        <br><br>
        <label>address</label>
    </form>
    <style>
        .error{
            color :red;
        }
    
    </style>


    
</body>
</html>





