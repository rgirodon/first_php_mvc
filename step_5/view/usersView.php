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
        <?php echo $user['id']; ?> - <?php echo $user['firstname']; ?> <?php echo $user['lastname']; ?>
    </li>

<?php
}
?>

</ul>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>