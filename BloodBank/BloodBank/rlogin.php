<?php 
session_start();
if (isset($_SESSION['rid'])) {
    header("location:sentrequest.php");
}else{
?>
<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Login"; ?>
<head>




</head>
<body>
  <?php require 'header.php'; ?>

    
      
      <?php require 'message.php'; ?>


 

  


      <div class="" id="receivers">
      <fieldset style="width:30%; height:300px; text-align:center; margin:50px auto; color:black;">

          <legend><h1>Receiver Login</h1></legend>
         <form action="file/receiverLogin.php" method="post" style="text-align:center;">
         
          <input type="email" name="remail" placeholder="Receiver Email" style=" width:300px; text-align:center;  height:30px; font-size:15px;"><br><br>
       
          <input type="password" name="rpassword" placeholder="Receiver Password"  style=" width:300px; text-align:center;  height:30px; font-size:15px;"><br><br>
          <input type="submit" name="rlogin" value="Login" style=" width:300px; text-align:center; cursor:pointer;  height:30px; font-size:15px;"><br><br>
          <a href="register.php" class="" title="Click here">Don't have account?</a>
        </form>
        </fieldset>
   
</div>
</div>

</body>
</html>
<?php } ?>