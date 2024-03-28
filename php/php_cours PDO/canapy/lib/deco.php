<?php
require_once('db.php');
require_once('user.php');

$user = new User($db);
$user->deco();
