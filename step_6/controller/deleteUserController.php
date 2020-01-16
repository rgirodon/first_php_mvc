<?php
require '../inc/autoload.php';
require '../inc/constants.php';

use \FirstMvc\Model\UsersManager as UsersManager;

$id = $_GET['id'];

$usersManager = new UsersManager();

$usersManager->deleteUser($id);

header("Location: usersController.php");