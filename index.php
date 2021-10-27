<?php
/*
 * Duarte Cancela
 * 13683
 * 21/10/2021
 */
include("GradeClass.php");
include("StudentClass.php");
include("StudentDB.php");

if($_POST['act'] == 'create'){
    $student = new Student();
    $student->setName($_POST["name"]);
    $student->setNumber($_POST["number"]);
    $student->setEmail($_POST["email"]);
    $student->setProgram($_POST["program"]);


// create an object create student in database
    $studentDb = new StudentDB();
    $studentDb->createStudent($student);

}else if($_POST['act'] == 'edit'){
    // create an object create student in database
    $studentDb = new StudentDB();
    $studentDb->updateStudent($_POST["number"], $_POST["name"]);
}



/*$grade = new Grade();
$grade->setSubjectList($_POST["name1"], $_POST["grade1"]);
$grade->setSubjectList($_POST["name2"], $_POST["grade2"]);
$grade->setSubjectList($_POST["name3"], $_POST["grade3"]);



// output to HTML
echo $student->getName() . "<br>";
echo $student->getNumber() . "<br>";
echo $student->getEmail() . "<br>";
echo $student->getProgram() . "<br>";

echo "<p> -- Subject List --</p>";

// generate html table
echo '<table>'; // start table
foreach($grade->getSubjectList() as $value){
    echo "<tr>"; // start table row
    foreach ($value as $item){
        echo "<td>" . $item . "<br>"; // create table cell
    }
    echo "</tr>"; // end table row
}
echo '</table>'; // end table

$gradeSum = 0.0;

foreach($grade->getSubjectList() as $value){
    global $gradeSum;
    if($value >= 9.5){
        $gradeSum = $gradeSum + $value[1];
    }
}

$subjectList = $grade->getSubjectList();
$size = sizeof($subjectList);

function subjectGradesAverage($gradeSum){
    global $size;
    return $gradeSum / $size;
}

echo "<br><span>Approved Grade Average = </span>" . subjectGradesAverage($gradeSum) . "<br>" ;*/


