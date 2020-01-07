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
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=firstmvc;charset=utf8', 'root', 'rgirodon');
        }
        catch(Exception $e) {
            die('Erreur : '.$e->getMessage());
        }

        $req = $bdd->query('SELECT id, firstname, lastname FROM user order by id');

        $users = $req->fetchAll();

        $req->closeCursor();

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