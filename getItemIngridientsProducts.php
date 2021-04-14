<!doctype html>
<html lang="en">
<head>

    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php
/**
 * Created by PhpStorm.
 * User: Преподаватель
 * Date: 07.04.2021
 * Time: 11:31
 */

require('phpQuery/phpQuery.php');

function getItemIngridientsProducts($href)
{
    $repository = [];
    $hbr = file_get_contents($href);
    $document = phpQuery::newDocument($hbr);
    $entry = $document->find('table.ingr tr');
    foreach ($entry as $item)
               $repository[]=$item;
    return $repository;
}

$href="./test.html";
 $res=getItemProducts($href);
print_r($res);

?>
</body>
</html>
