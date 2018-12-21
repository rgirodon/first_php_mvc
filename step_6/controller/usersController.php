<?php
require '../model/UsersManager.php';

use \FirstMvc\Model\UsersManager as UsersManager;

$usersManager = new UsersManager();

$req = $usersManager->getUsers();

require '../view/usersView.php';