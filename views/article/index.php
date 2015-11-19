<?php
    include('views/header.php');
?>

    <ul>
        <?php
            foreach ($articles as $article) {
        ?>
        
          <h3><a href="//localhost/myMvc_v2/public/articles/1" title=""><?=$article['title']?></a></h3>
          
        <?php
            }
        ?>
    </ul>

<?php
	include('views/footer.php');
?>


