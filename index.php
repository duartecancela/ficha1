<?php
include("grade_class.php");
include("student_class.php");

$grade = new Grade();
$grade->setSubjectList("DAW", 17);
$grade->setSubjectList("PDM", 14);
$grade->setSubjectList("SI", 9);

$student = new Student();
$student->setName("Duarte Cancela");
$student->setNumber(13683);
$student->setEmail("13683@stu.ipbeja.pt");
$student->setProgram("Engenharia Informática");

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

echo "<br><span>Aproved Grade Average = </span>" . subjectGradesAverage($gradeSum) . "<br>" ;


