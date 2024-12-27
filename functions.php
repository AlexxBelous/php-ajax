<?php


function getCount(string $table, $db): int
{
    return $db->query("SELECT COUNT(*) FROM {$table}")->findColumn();
}

function get_cities(int $start, int $per_page, $db): array
{
    return $db->query("select * from city limit $start, $per_page")->findAll();
}

function print_arr($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}