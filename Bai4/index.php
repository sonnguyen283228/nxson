<?php
    echo 'bai4'."<br>";
    $arrProducts = [
           'a', 'b', 'c', 'd'

    ];
    echo count($arrProducts);
echo '<br>';
$arrProducts[] = 'e';
Print_r($arrProducts);
array_push($arrProducts, 'f');
echo '<br>';
Print_r($arrProducts);
echo '<br>';
echo round(3.14);
echo '<br>';
echo trim(' t3h');
echo '<br>';
echo strpos('i love php', 'php');
echo '<br>';
echo strlen('nguyen xuan son');

echo '<br>';
$strProducts = json_encode($arrProducts);
echo '<br>';
Print_r($strProducts);
echo '<br>';

echo json_decode($strProducts);




?>

