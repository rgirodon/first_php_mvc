<?php 
$title = 'Users'; 
?>

<?php 
ob_start(); 
?>

<h1>Users</h1>

<div>
    <a href="addUserController.php">Create User</a>
</div>

<ul>        

<?php
foreach ($users as $user) {
?>

    <li>
        <?= $user->id ?> - <?= $user->firstname ?> <?= $user->lastname ?> 
        <a href="deleteUserController.php?id=<?= $user->id ?>">[Delete]</a>
    </li>

<?php
}
?>

</ul>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>