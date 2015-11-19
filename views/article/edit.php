<?php include('/views/header.php'); ?>

<form method="POST" action="//localhost/myMvc_v2/public/articles/<?php echo $article['id']?>">
	<input type="hidden" name="id" value="<?php echo $article['id']?>">
	<div class="form-group">
		<label for="title">Title</label>
		<input name="title" required id="title" class="form-control" placeholder="Title" value="<?php echo $article['title']?>">
	</div>
	<div class="form-group">
		<label for="comment">Body</label>
		<textarea name="body" id="comment" class="form-control" rows="5"><?php echo $article['body']?></textarea>
	</div>

	<button class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Save </button>
</form>

<?php include('/views/footer.php'); ?>