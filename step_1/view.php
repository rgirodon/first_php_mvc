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
    	        <?php echo $user['id']; ?> - <?php echo $user['firstname']; ?> <?php echo $user['lastname']; ?>
            </li>

        <?php
        }
        ?>
        </ul>
    </body>
</html>