<?php
$json = file_get_contents("verbs-adjectives-nouns.json");
$jsonObj = json_decode($json);
$arr_Selected=array();

foreach ($jsonObj as $objTitle => $value){
    $arr_Selected[$objTitle] = $value[rand(0,count($jsonObj->{$objTitle})-1)];
}

$together="";
foreach ($arr_Selected as $value){
    $together .= $value . " ";
}

echo $together;