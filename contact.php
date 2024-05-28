

<?php
$nameErr = $emailErr = $passErr = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
   if(empty($_POST['username']))
   {
       $nameErr = "emter name";
   }
   else
   $name = $_POST['username'];
$contains_alpha = preg_match('/[a-z]/',$name);
$conatins_digit = preg_match('/[0-9]',$name);
$len = strlen($name) >= 6 && strlen($name) <= 14;
if(!(($contains_alpha || $contains_digit) && $len))
$nameErr = "invalid name";
  
   if(empty($_POST['email_address']))
   {
       $emailErr = "emter name";
   }
   else
   $emaill = $_POST['email_address'];
   if(!filter_var($emaill, FILTER_VALIDATE_EMAIL))
   {
      $emailErr = "invalid email";
   }
   
   
   if(empty($_POST['password']))
      {
          $passErr = "emter name";
      }
      else{
      $pass = $_POST['password'];
   
   
   $contains_alpha = preg_match('/[a-z]/',$pass);
   $conatins_digit = preg_match('/[0-9]',$pass);
   if(!($contains_alpha && $contains_digit))
   $passErr = "inavlid pass";}}
   ?>
   <!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
   </head>
   <body>
      <form action="demo.php" method = "post">
          <label>username</label ><br>
          <input type="text" name = "username" />
          <span class = "error">*<?php echo $nameErr;?></span>
          <br><br>
          <label>email_address</label> <br>
          <input type="email" name = "email_address" />
          <span class = "error">*<?php echo $emailErr; ?></span>
          <br><br>
          <label>password</label><br>
          <input type="password" name = "password" />
          <span class ="error">*<?php echo $passErr; ?></span>
          <br><br>
          <label>address</label><br>
       <input type="text" name = "address" >
       <label ></label>
       <input type="submit" onclick = $nameErr  name = "Submit">
      
      


   </form>
   <style>
       .error{
           color : red;
            }
      
   </style>
  
  
  
</body>
</html>




