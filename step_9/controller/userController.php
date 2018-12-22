<?php
require '../model/UsersManager.php';

use \FirstMvc\Model\UsersManager as UsersManager;

$usersManager = new UsersManager();

if (isset($_GET['id'])) {
    
    $id = $_GET['id'];
    
    $user = $usersManager->getUser($id);

    require '../view/userView.php';
}