<?php

$name = "";
$number = 0;
$email = "";
$program = "";
$subjectList = array("subjectName" => "", "grade" => 0.0, "status" => "");

function setName($n){
    global $name;
    $name = $n;
}

function setNumber($n){
    global $number;
    $number = $n;
}

function setSubjectList($n, $g){
    global $subjectList;
    $subjectList["name"] = $n;
    $subjectList["grade"] = $g;
    $subjectList["status"] = status($g);
}

function status($grade){
    if ($grade >= 9.5) {
        return "Approved";
    } else {
        return "Disapproved";
    }
}

setName("Duarte");
setNumber(13683);
setSubjectList("DAW", 15);

echo "<p>$name</p>";
echo "<p>$number</p>";

echo $subjectList["name"] . $subjectList["grade"] . $subjectList["status"];
