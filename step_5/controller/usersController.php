<?php
require '../model/UsersManager.php';

$usersManager = new UsersManager();

$users = $usersManager->getUsers();

require '../view/usersView.php';