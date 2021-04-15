<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
require ('phpQuery/phpQuery.php');

$hbr = file_get_contents('https://www.russianfood.com/');
$name="file.txt";
$host="https://www.russianfood.com";
$repository=[];
$item=['category'=>null,'products'=>[]];

$document = phpQuery::newDocument($hbr  );

$entry = $document->find('dl.catalogue *');
echo "<pre>";

//print_r(pq($entry)->text());

foreach ($entry as $el) {
  if($el->tagName=="dt"){
     //   echo $el->textContent."<br>";
        if($item['category']!=null) {
            $repository[] = $item;
            $item = ['category' => null, 'products' => []];
        }
        else $item=['category'=>$el->textContent,'products'=>[]];
  }
        //  file_put_contents($name,$str,FILE_APPEND);


    if($el->parentNode->tagName!=dt &&  $el->tagName=="a"){
      //  echo "  --" .$el->textContent." {$host}".$el->attributes['href']->value."<br>";
        $item['products'][]=["{$el->textContent}"=>"{$host}{$el->attributes['href']->value}" ];




        //  file_put_contents($name,$str,FILE_APPEND);
    }

  //  $pq = pq($el); // Это аналог $ в jQuery
    // меняем атрибуты найденого элемента
    //print_r($el->parentNode)  ;
   // echo($el->parentNode()->tagName)  ;

}


//echo  print_r($repository);
echo  json_encode($repository);
file_put_contents('repository.json',json_encode($repository));
exit;
?>
</body>
</html>
