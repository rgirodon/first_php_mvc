<?php 
$title = 'Users'; 
?>

<?php 
ob_start(); 
?>

<h1>Users</h1>

<ul>        

<?php
while ($user = $req->fetch()) {
?>

    <li>
        <?php echo $user['id']; ?> - <?php echo $user['firstname']; ?> <?php echo $user['lastname']; ?>
    </li>

<?php
}

$req->closeCursor();
?>

</ul>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>

