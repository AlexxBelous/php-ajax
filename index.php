<?php
use core\Db;

require __DIR__ . '/vendor/autoload.php';
dirname(__DIR__ . require_once 'functions.php');


$db_config = require_once "config.php";
$db = Db::getInstance()->getConnection($db_config['db']);


$total = getCount('city', $db);



require_once 'views/index.tpl.php';
