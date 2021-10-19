<?php

$name = "";
$number = 0;
$email = "";
$program = "";
$subjectList = array();

function setName($n){
    global $name;
    $name = $n;
}

function getName(){
    global $name;
    return $name;
}

function setNumber($n){
    global $number;
    $number = $n;
}

function getNumber(){
    global $number;
    return $number;
}

function setEmail($e){
    global $email;
    $email = $e;
}

function getEmail(){
    global $email;
    return $email;
}

function setProgram($p){
    global $program;
    $program = $p;
}

function getProgram(){
    global $program;
    return $program;
}

function setSubjectList($n, $g){
    global $subjectList;
    array_push($subjectList, array($n, $g, status($g)));
}

function getSubjectList(){
    global $subjectList;
    return $subjectList;
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
setEmail("13683@stu.ipbeja.pt");
setprogram("Engenharia Informática");
setSubjectList("DAW", 15);
setSubjectList("PDM", 17);
setSubjectList("SI", 5);

// output to HTML
echo getName() . "<br>";
echo getNumber() . "<br>";
echo getEmail() . "<br>";
echo getProgram() . "<br>";

echo "<p> --Subject List--</p>";

// generate html table
echo '<table>'; // start table

foreach($subjectList as $value){

    echo "<tr>"; // start table row

    foreach ($value as $item){
        echo "<td>" . $item . "<br>"; // create table cell
    }

    echo "</tr>"; // end table row
}

echo '</table>'; // end table

$gradeSum = 0.0;

foreach($subjectList as $value){
    global $gradeSum;
    if($value >= 9.5){
        $gradeSum = $gradeSum + $value[1];
    }
}

echo "<span>Aproved Grade Average = </span>" . subjectGradesAverage($gradeSum) ;


function subjectGradesAverage($gradeSum){
    global $subjectList;
    $average = $gradeSum / sizeof($subjectList);
    return $average;
}

