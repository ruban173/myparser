
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


require ('phpQuery/phpQuery.php');
$href_curent="https://www.russianfood.com/recipes/bytype/?fid=12";
$i=100;
$href_curent.= "&page={$i}#rcp_list";
$curent_file=file_get_contents($href_curent);
 $size=strlen($curent_file);
 echo $size;




exit;
?>
</body>
</html>
