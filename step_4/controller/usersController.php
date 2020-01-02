<?php
require '../model/usersModel.php';

$req = getUsers();

require '../view/usersView.php';