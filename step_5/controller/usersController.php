<?php
require '../model/UsersManager.php';

$usersManager = new UsersManager();

$req = $usersManager->getUsers();

require '../view/usersView.php';