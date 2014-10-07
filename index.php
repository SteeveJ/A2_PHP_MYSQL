<?php
/**
 * Created by PhpStorm.
 * User: Steeve Jerent
 * Date: 07/10/2014
 * Time: 14:43
 */

$config = include __DIR__.'/config/config.php';

$link = mysqli_connect(
    $config['database']['hostname'],
    $config['database']['username'],
    $config['database']['password'],
    $config['database']['dbname']
);
var_dump(mysqli_error($link));