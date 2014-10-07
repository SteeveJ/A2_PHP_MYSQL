<?php
/**
 * Created by PhpStorm.
 * User: Steeve Jerent
 * Date: 07/10/2014
 * Time: 14:43
 */
include __DIR__.'/functions/database.fn.php';
include __DIR__.'/functions/article.fn.php';
$config = include __DIR__.'/config/config.php';

$link= getDatabaseLink($config['database']);
var_dump(removeArticle($link,3));