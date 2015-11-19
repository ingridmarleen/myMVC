<?php
    include('views/header.php');
?>

    <ul>
        <?php
            echo $user['name'] . "<br />" . $user['email'];
            
        ?>
    </ul>
    <a href="//localhost/myMvc_v2/public/users/1/edit" class="btn btn-info" role="button">Edit profile</a>

<?php
	include('views/footer.php');
?>