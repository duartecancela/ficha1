<?php
/*
* Duarte Cancela
* 13683
* 27/10/2021
*/

include("DbClass.php");

class StudentDB {
    public function createStudent(Student $student){

        $name = $student->getName();
        $number = $student->getNumber();
        $email = $student->getEmail();
        $program = $student->getProgram();

        $dbConnection = new DbClass();
        $conn = $dbConnection->connect();
        $sql = "INSERT INTO student(name, number, email, program) VALUES ('$name', $number, '$email', '$program')";

            if ($conn->query($sql)) {
                $last_id = $conn->lastInsertId();
                echo "New record created successfully. Last inserted ID is: " . $last_id . "." . "<br>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->errorCode();
            }
    }

    public function readStudent(){

    }

    public function updateStudent(){

    }

    public function deleteStudent(){

    }
}