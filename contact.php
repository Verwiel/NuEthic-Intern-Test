<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once './vendor/autoload.php';

use FormGuide\Handlx\FormHandler;


$pp = new FormHandler();

$validator = $pp->getValidator();
$validator->fields(['name','email', 'message'])->areRequired()->maxLength(50);
$validator->field('Email')->isEmail();
$validator->field('Message')->maxLength(6000);

$pp->sendEmailTo('drew_verwiel@outlook.com'); // ← Your email here

echo $pp->process($_POST);

?>
