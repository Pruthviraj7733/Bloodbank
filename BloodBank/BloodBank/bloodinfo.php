<?php 
  require 'file/connection.php';
  session_start();
  if(!isset($_SESSION['hid']))
  {
  header('location:login.php');
  }
  else {
?>
<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Add blood samples"; ?>

<body>
  <?php require 'header.php'; ?>

    <div class="">

      <?php require 'message.php'; ?>

   
        <div align="center" style="margin-top:100px; color:blue;"><h1>Add blood group available in your hospital</h1></div>
        
        <form action="file/infoAdd.php" method="post" align="center">
          <select class="" name="bg">
                <option disabled selected>Blood Group</option>
                <option>A-</option>
                <option>A+</option>
                <option>B-</option>
                <option>B+</option>
                <option>AB-</option>
                <option>AB+</option>
                <option>O-</option>
                <option>O+</option>
          </select><br><br>
          <input type="submit" name="add" value="Add" style="width:100px; background-color:green; border:2px solid black; color:white; border-radius:10px;
          cursor:pointer; "><br><br>
          <a href="index.php" class="" title="click here" style="color:red;">Cancel</a>
        </form>
         </div>
       </div>
     </div>

<?php   if(isset($_SESSION['hid'])){
    $hid=$_SESSION['hid'];
    $sql = "select * from bloodinfo where hid='$hid'";
    $result = mysqli_query($conn, $sql);
  }
  ?>
    
          <table border=5 align="center" style="margin-top:30px; font-size:25px; text-align:center;">
            <th colspan="4" class="">Blood Bank</th>
            <tr>
              <th>No</th>

              <th>Blood Samples</th>
              <th>Date and Time</th>
              <th>Action</th>
            </tr>
            <div>
                <?php
                if ($result) {
                    $row =mysqli_num_rows( $result);
                    if ($row) { //echo "<b> Total ".$row." </b>";
                }else echo '<b style="color:white;background-color:red;padding:7px;border-radius: 15px 50px;">Nothing to show.</b>';
            }
            ?>
            </div>
            <?php while($row = mysqli_fetch_array($result)) { ?>
            <tr>
              <td><?php echo ++$counter; ?></td>

              <td><?php echo $row['bg'];?></td>
              <td><?php echo $row['bdate'];?></td>
              <td><a href="file/delete.php?bid=<?php echo $row['bid'];?>">Delete</a></td>
            </tr>
            <?php } ?>
          </table>
      </div>

   </div>
</div>

</body>
<?php } ?>