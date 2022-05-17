<?php
require 'file/connection.php';
session_start();
if(!isset($_SESSION['rid']))
{
  header('location:login.php');
}
else {
	if(isset($_SESSION['rid'])){
		$id=$_SESSION['rid'];
		$sql = "SELECT * FROM receivers WHERE id='$id'";
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

	<div class="">

		<?php require 'message.php'; ?>

		<div class="">
			<div class="">
				<div class="">
					<div class="">
						<img src="image/user.png" alt="profile" class="" width="60" height="60">
					</div>
					<div class="">
					   <form action="file/updateprofile.php" method="post">
					   	<label class="" class="">Receiver Name</label>
						<input type="text" name="rname" value="<?php echo $row['rname']; ?>" class="">
						<label class="" class="">Receiver Email</label>
						<input type="email" name="remail" value="<?php echo $row['remail']; ?>" class="">
						<label class="" class="">Receiver Password</label>
						<input type="text" name="rpassword" value="<?php echo $row['rpassword']; ?>" class="form-control mb-3">
						<label class="" class="">Receiver Phone Number</label>
						<input type="text" name="rphone" value="<?php echo $row['rphone']; ?>" class="form-control mb-3">
						<label class="" class="">Receiver City</label>
						<input type="text" name="rcity" value="<?php echo $row['rcity']; ?>" class="">
						<label class="" class="">Receiver Blood Group</label>
						<select class="" name="bg" required>
                             <option selected><?php echo $row['rbg']; ?></option>
                             <option>A-</option>
                             <option>A+</option>
                             <option>B-</option>
                             <option>B+</option>
                             <option>AB-</option>
                             <option>AB+</option>
                             <option>O-</option>
                             <option>O+</option>
                        </select>
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