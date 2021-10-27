<?php
/*
* Duarte Cancela
* 13683
* 27/10/2021
*/

include("DbClass.php");

class StudentDB {

    private function connect(){
        $dbConnection = new DbClass();
        return $dbConnection->connect();;
    }

    public function createStudent(Student $student){
        $name = $student->getName();
        $number = $student->getNumber();
        $email = $student->getEmail();
        $program = $student->getProgram();

        $conn = $this->connect();
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

    public function updateStudent($number, $name){
        $conn = $this->connect();
        $sql = "UPDATE student SET name='$name' WHERE number=$number";

        if ($conn->query($sql)) {
            echo "Record was updated successfully.";
        } else {
            echo "Error updating record" . "<br>" . $conn->errorCode();
        }

        $conn = null;

    }

    public function deleteStudent(){

    }
}