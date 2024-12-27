<?php

use core\Db;
use core\Pagination;
use core\Validator;

require __DIR__ . '/vendor/autoload.php';
dirname(__DIR__ . require_once 'functions.php');


$db_config = require_once "config.php";
$db = Db::getInstance()->getConnection($db_config['db']);

$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['page'])) {
    $page = (int)$data['page'] ?? 1;
    $per_page = $db_config['per_page'];
    $total = getCount('city', $db);
    $pagination = new Pagination((int)$page, $per_page, $total);
    $start = $pagination->get_start();
    $cities = get_cities($start, $per_page, $db);
    require_once "views/index-content.php";
    die();
}
