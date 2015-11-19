<?php
    include('views/header.php');
?>

    <ul>
        <?php
            foreach ($users as $user) {
                printf('<li>%s - %s</li>', $user['name'], $user['email']);
            }
        ?>
    </ul>

<?php
	include('views/footer.php');
?>


