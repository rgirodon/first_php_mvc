<?php
require '../inc/autoload.php';
require '../inc/constants.php';

use \FirstMvc\Model\UsersManager as UsersManager;
use \FirstMvc\Domain\User as User;

$usersManager = new UsersManager();

$errors = [];

$firstname = '';
$lastname = '';
$password = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // get data of post
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];

    // instantiate new user with this data
    $user = new User(0, $firstname, $lastname, $password);

    // check if user is valid
    $errors = $usersManager->isValid($user);

    // create user in db
    if (empty($errors)) {

        $usersManager->insertUser($user);

        header("Location: usersController.php");
    }
}

require '../view/addUserView.php';