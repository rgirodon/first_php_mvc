<?php 
$title = 'Users'; 
?>

<?php 
ob_start(); 
?>

<h1>Users</h1>

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

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

