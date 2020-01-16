<?php 
$title = 'Create User'; 
?>

<?php 
ob_start(); 
?>

<h1>Create User</h1>

<div>
    <form action="addUserController.php" method="POST">

        <div>
            First Name : <input type="text" name="firstname">
        </div>

        <div>
            Last Name : <input type="text" name="lastname">
        </div>

        <div>
            Password : <input type="password" name="password">
        </div>

        <div>
            <input type="submit" value="Créer">
        </div>

    </form>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>