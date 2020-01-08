<?php
require '../inc/autoload.php';

use \FirstMvc\Model\UsersManager as UsersManager;

$usersManager = new UsersManager();

$users = $usersManager->getUsers();

var_dump($users);