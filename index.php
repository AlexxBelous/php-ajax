<?php

use core\Db;
use core\Pagination;

require __DIR__ . '/vendor/autoload.php';
dirname(__DIR__ . require_once 'functions.php');


$db_config = require_once "config.php";
$db = Db::getInstance()->getConnection($db_config['db']);


$page = $_GET['page'] ?? 1;
$per_page = $db_config['per_page'];
$total = getCount('city', $db);

$pagination = new Pagination((int)$page, $per_page, $total);
$start = $pagination->get_start();

$cities = get_cities($start, $per_page, $db);





require_once 'views/index.tpl.php';
