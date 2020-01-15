<?php
require '../inc/autoload.php';
require '../inc/constants.php';

use \FirstMvc\Model\UsersManager as UsersManager;

use \FirstMvc\Domain\User as User;

$usersManager = new UsersManager();

/*
$users = $usersManager->getUsers();

var_dump($users);
*/

/*
$user1 = $usersManager->getUser(1);

var_dump($user1);
*/

/*
$user1 = new User(0,
                  'Rémy',
                  'Girodon',
                  'DTA');

$id = $usersManager->insertUser($user1);

echo 'User créé avec l\'id '.$id;
*/

/*
$result = $usersManager->deleteUser(8);

if ($result) {

    echo 'User supprimé !';
}
else {
    echo 'Erreur lors de la suppression !';
}
*/

/*
$user1 = new User(7,
                  'Alexander',
                  'Trent',
                  'LFC');

$result = $usersManager->updateUser($user1);     

if ($result) {

    echo 'User modifié !';
}
else {
    echo 'Erreur lors de la modification !';
}
*/

$user1 = new User(1,
                  'Alexander',
                  'Trent',
                  'LFC20192020');

echo "is Valid user1 ?";

var_dump($usersManager->isValid($user1));


$user2 = new User(2,
                  '',
                  'Trent',
                  'LFC');

echo "is Valid user2 ?";

var_dump($usersManager->isValid($user2));


$user3 = new User(3,
                  'Alexander',
                  '',
                  'LFC');

echo "is Valid user3 ?";

var_dump($usersManager->isValid($user3));


$user4 = new User(4,
                  'Alexander',
                  'Trent',
                  '');

echo "is Valid user4 ?";

var_dump($usersManager->isValid($user4));


$user5 = new User(5,
                  'Alexander-Alexander-Alexander-Alexander-Alexander',
                  'Trent',
                  'LFC');

echo "is Valid user5 ?";

var_dump($usersManager->isValid($user5));