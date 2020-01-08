<?php
require '../model/Manager.php';
require '../domain/User.php';
require '../model/UsersManager.php';

use \FirstMvc\Model\UsersManager as UsersManager;

$usersManager = new UsersManager();

$users = $usersManager->getUsers();

require '../view/usersView.php';