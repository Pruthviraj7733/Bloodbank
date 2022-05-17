<?php 
session_start();
if (isset($_SESSION['hid'])) {
  header("location:bloodrequest.php");
}elseif (isset($_SESSION['rid'])) {
  header("location:sentrequest.php");
}else{
?>
<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Register"; ?>

<head>
  
  
</head>
<body  >
  <?php include 'header.php'; ?>

    <div class="">

    <?php require 'message.php'; ?>

    
<table align="center">
  <tr>
  <td>
       <div  id="hospitals">
<fieldset style="width:50%; height:560px;text-align:center; margin-bottom:50px; margin-right:10px ;padding-bottom:10px;" >
  <legend ><h1>Hospital Registration</h1></legend>
        <form  style="padding:4px"action="file/hospitalReg.php" method="post" enctype="multipart/form-data" class="form1">
          <input type="text" name="hname" placeholder="Hospital Name" class="" required>
          <input type="text" name="hcity" placeholder="Hospital City" class="" required>
          <input type="tel" name="hphone" placeholder="Hospital Phone Number" class="" required pattern="[0,6-9]{1}[0-9]{9,11}" title="Password must have start from 0,6,7,8 or 9 and must have 10 to 12 digit">
          <input type="email" name="hemail" placeholder="Hospital Email" class="" required>
          <input type="password" name="hpassword" placeholder="Hospital Password" class="" required minlength="6">
          <input type="submit" name="hregister" value="Register" class="btn1"><br>
          <a href="login.php" class="" title="Click here">Already have account?</a>
        </form>
        </fieldset>
        
       </div>
</td>
<td>
<fieldset style="width:50%; height:570px;text-align:center ; margin-bottom:50px; ">
<legend ><h1>Receiver Registration</h1></legend>
       <div class="" id="receivers">

         <form action="file/receiverReg.php" method="post" enctype="multipart/form-data" class="form2">
          <input type="text" name="rname" placeholder="Receiver Name" class="" required><br>
          <select name="rbg" class="" required>
                <option disabled="" selected="">Blood Group</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
          </select><br>
          <input type="text" name="rcity" placeholder="Receiver City" class="" required>
          <input type="tel" name="rphone" placeholder="Receiver Phone Number" class="" required pattern="[0,6-9]{1}[0-9]{9,11}" title="Password must have start from 0,6,7,8 or 9 and must have 10 to 12 digit">
          <input type="email" name="remail" placeholder="Receiver Email" class="" required>
          <input type="password" name="rpassword" placeholder="Receiver Password" class="" required minlength="6"><br>
          <input type="submit" name="rregister" value="Register" class="btn1"><br>
          <a href="rlogin.php" class="" title="Click here">Already have account?</a>
        </form>
        </td>
        
       </div>
    </div>
</fieldset>
    </tr>
        </table>
</div>
</div>
</div>
</div>

</body>
</html>
<?php require 'footer.php' ?>
<?php } ?>