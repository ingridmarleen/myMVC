<?php include('/views/header.php'); ?>

<form method="POST" action="//localhost/myMvc_v2/public/users/<?php echo $user['id']?>">
	<input type="hidden" name="id" value="<?php echo $user['id']?>">
	<div class="form-group">
		<label for="name">Name</label>
		<input name="name" required id="name" class="form-control" placeholder="Name" value="<?php echo $user['name']?>">
	</div>
	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" required name="email" id="email" class="form-control" placeholder="Email" value="<?php echo $user['email']?>">
	</div>
	<div class="form-group">
		<label for="username">Username</label>
		<input name="username"required id="username" class="form-control" placeholder="Username" value="<?php echo $user['username']?>">
	</div>

	<button class="btn btn-primary"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Save </button>
</form>

<?php include('/views/footer.php'); ?>