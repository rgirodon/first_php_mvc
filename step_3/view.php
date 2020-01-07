<?php 

$title = 'Users'; 

ob_start(); 
?>

<ul>        

<?php
foreach ($users as $user) {
?>

    <li>
        <?= $user['id'] ?> - <?= $user['firstname'] ?> <?= $user['lastname'] ?>
    </li>

<?php
}
?>

</ul>

<?php 
$content = ob_get_clean();

require('template.php'); 
?>
