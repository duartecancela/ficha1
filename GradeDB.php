<?php
/*
* Duarte Cancela
* 13683
* 27/10/2021
*/


class GradeDB {

    private function connect(){
        $dbConnection = new DbClass();
        return $dbConnection->connect();;
    }

    public function createGrade(Grade $grade, $student_number){

        $subjectList = $grade->getSubjectList();
        $g = $subjectList[0][1];
        $status = $grade->status($g);
        $name = $subjectList[0][0];

        $conn = $this->connect();

        $sql1 ="SELECT id FROM student WHERE number LIKE $student_number";

        $student_id = 0;

        if ($conn->query($sql1)) {
            // find student_id by is number
            echo "User found.";
            $result = $conn->query($sql1);
            $array =  $result->fetch(PDO::FETCH_ASSOC);
            foreach ($array as $key => $value) { // print associative array
                echo "Key: $key; Value: $value\n";
                $student_id = $value;
                //echo gettype($value), "\n"; // get variable type
            }

            $stu_id = (float)$student_id;

            // execute query
            $sql = "INSERT INTO grade(student_id, name, grade, status) VALUES ('$stu_id', '$name', $g, '$status')";

            if ($conn->query($sql)) {
                $last_id = $conn->lastInsertId();
                echo "New record created successfully. Last inserted ID is: " . $last_id . "." . "<br>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->errorCode();
            }

            } else {
                echo "Can't find this user" . "<br>" . $conn->errorCode();
            }

    }

    public function readGrade(){

    }

    public function updateGrade(){

    }

    public function deleteGrade(){

    }
}