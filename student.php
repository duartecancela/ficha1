<?php

$name = "";
$number = 0;
$email = "";
$program = "";
$subjectList = array(array());

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
//    $subjectList["subjectName"] = $n;
//    $subjectList["grade"] = $g;
//    $subjectList["status"] = status($g);
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
setSubjectList("SI", 12);


// output to HTML
echo getName() . "<br>";
echo getNumber() . "<br>";
echo getEmail() . "<br>";
echo getProgram() . "<br>";


print_r(getSubjectList()) ;
