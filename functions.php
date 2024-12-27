<?php


function getCount(string $table, $db): int
{
    return $db->query("SELECT COUNT(*) FROM {$table}")->findColumn();
}

function print_arr($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}