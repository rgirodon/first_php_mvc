<?php
require '../model/usersModel.php';

$users = getUsers();

require '../view/usersView.php';