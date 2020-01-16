<?php 
$title = 'Create User'; 
?>

<?php 
ob_start(); 
?>

<h1>Create User</h1>

<?php
if (!empty($errors)) {
?>
    <div class="alert alert-danger" role="alert">
        <ul>
            <?php
            foreach ($errors as $error) {

                echo '<li>'.$error.'</li>';
            }
            ?>
        </ul>
    </div>
<?php
}
?>
<div>
    <form action="addUserController.php" method="POST">

        <div>
            First Name : <input type="text" name="firstname" value="<?= $firstname ?>">
        </div>

        <div>
            Last Name : <input type="text" name="lastname" value="<?= $lastname ?>">
        </div>

        <div>
            Password : <input type="password" name="password" value="<?= $password ?>">
        </div>

        <div>
            <input type="submit" value="Créer">
        </div>

    </form>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>