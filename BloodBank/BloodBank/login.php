<?php 
session_start();
if (isset($_SESSION['hid'])) {
  header("location:bloodrequest.php");
}else{
?>
<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Login"; ?>

<body>
  <?php require 'header.php'; ?>

    
      
      <?php require 'message.php'; ?>


         

  
       <div class="" id="hospitals">
       <fieldset style="width:30%; height:300px; text-align:center; margin:50px auto; color:black;">

        <legend><h1>Hospital Login</h1></legend>
        <form action="file/hospitalLogin.php" method="post">
         
          <input type="email" name="hemail" placeholder="Hospital Email" style="width:300px; text-align:center; height:30px; font-size:20px;"><br><br>

        
          <input type="password" name="hpassword" placeholder="Hospital Password" style="width:300px; text-align:center; height:30px; font-size:20px;"><br><br>
          <input type="submit" name="hlogin" value="Login" style="width:300px; cursor:pointer; height:30px; font-size:20px;" ><br><br>
          <a href="register.php" class="" title="Click here">Don't have account?</a>
        </form>
    


        </fieldset>
    
   
</div>
</div>

</body>
</html>
<?php } ?>