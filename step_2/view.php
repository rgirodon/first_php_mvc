<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Users</title>
    </head>
        
    <body>
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
    </body>
</html>