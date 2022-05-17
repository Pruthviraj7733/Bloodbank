<?php
require 'file/connection.php';
session_start();
if(!isset($_SESSION['hid']))
{
  header('location:login.php');
}
else {
	if(isset($_SESSION['hid'])){
		$id=$_SESSION['hid'];
		$sql = "SELECT * FROM hospitals WHERE id='$id'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_array($result);
	}
}
?>

<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Receiver Profile"; ?>

<body>
	<?php require 'header.php'; ?>

	<div class="container cont">

		<?php require 'message.php'; ?>

		<div class="">
			<div class="">
				<div class="">
					<div class="">
						<img src="image/hospital.png" alt="profile" class="" width="70" height="60">
					</div>
					<div class="">
					   <form action="file/updateprofile.php" method="post">
					   	<label class="" class="">Hospital Name</label>
						<input type="text" name="hname" value="<?php echo $row['hname']; ?>" class="">
						<label class="">Hospital Email</label>
						<input type="email" name="hemail" value="<?php echo $row['hemail']; ?>" class="">
						<label class="">Hospital Password</label>
						<input type="text" name="hpassword" value="<?php echo $row['hpassword']; ?>" class="">
						<label class="text-muted font-weight-bold">Hospital Phone Number</label>
						<input type="text" name="hphone" value="<?php echo $row['hphone']; ?>" class="">
						<label class="">Hospital City</label>
						<input type="text" name="hcity" value="<?php echo $row['hcity']; ?>" class="">
						<input type="submit" name="update" class="" value="Update">
					   </form>
					</div>
					<a href="index.php" class="">Cancel</a><br>
				</div>
			</div>
		</div>
	</div>
	<?php require 'footer.php'; ?>
</body>
</html>