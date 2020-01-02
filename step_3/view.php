<?php 

$title = 'Users'; 

ob_start(); 

?>

<ul>        

<?php
while ($user = $req->fetch()) {
?>

    <li>
        <?= $user['id'] ?> - <?= $user['firstname'] ?> <?= $user['lastname'] ?>
    </li>

<?php
}

$req->closeCursor();
?>

</ul>

<?php 

$content = ob_get_clean();

require('template.php'); 

?>
