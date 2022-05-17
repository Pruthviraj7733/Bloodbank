<div>
	<?php $counter=0; if(isset($_GET['msg'])) { ?>
		<div class="" id="message">
			<button type="button" class="close" data-dismiss="alert" title="close">&times;</button><?php echo $_GET['msg'];?>
		</div>
	<?php }?>
	<?php if(isset($_GET['error'])) { ?>
		<div class="" id="message">
			<button type="button" class="close" data-dismiss="alert" title="close">&times;</button><?php echo $_GET['error'];?>
		</div>
	<?php }?>
</div>

<script>
$( document ).ready(function(){
	$('#message').fadeIn('slow', function(){
		$('#message').delay(5000).fadeOut(); 
	});
});
</script>