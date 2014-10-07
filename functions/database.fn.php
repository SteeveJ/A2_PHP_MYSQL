<?php
/**
 * Created by PhpStorm.
 * User: Steeve Jerent
 * Date: 07/10/2014
 * Time: 16:06
 */

function getDatabaseLink(array $config){
    return $link = mysqli_connect(
        $config['hostname'],
        $config['username'],
        $config['password'],
        $config['dbname']
    );
}