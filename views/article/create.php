<?php include('/views/header.php'); ?>

<form method="post" action="//localhost/myMvc_v2/public/articles">
	<div class="form-group">
		<label for="title">Title</label>
		<input name="title" required id="title" class="form-control" placeholder="Title">
	</div>
	<div class="form-group">
		<label for="body">Body</label>
		<textarea name="body" id="comment" class="form-control" rows="5"></textarea>
	</div>

	<button class="btn btn-primary"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Save </button>
</form>

<?php include('/views/footer.php'); ?>