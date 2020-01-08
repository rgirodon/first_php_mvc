<?php
require '../domain/User.php';

use FirstMvc\Domain\User;

$user = new User(0, 'Remy', 'Girodon', 'DTA');

var_dump($user);

echo $user->id;
echo '<br><br>';
echo $user->firstname;
echo '<br><br>';
echo $user->lastname;
echo '<br><br>';
echo $user->password;