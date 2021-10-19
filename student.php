<?php

$name = "";
$number = 0;
$email = "";
$program = "";
$subjectLists = array();

function setName($n){
    global $name;
    $name = $n;
}

function setNumber($n){
    global $number;
    $number = $n;
}

setName("Duarte");
setNumber(13683);
echo $name;
echo $number;