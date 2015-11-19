<?php
    include('views/header.php');
?>

    <ul>
        <?php
            echo "<h3>" . $article['title'] . "</h3>"
                    . "<br />" 
                    . $article['body']
                    . "<br />";
            
        ?>
    </ul>
    <a href="//localhost/myMvc_v2/public/articles/1/edit" class="btn btn-info" role="button" type="submit">Edit article</a>

<?php
	include('views/footer.php');
?>