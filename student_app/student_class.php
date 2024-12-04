<?php
    class Student {
        public $id;
        public $name;
        public $batch;
        public $result;

        public function __construct($id, $name, $batch, $result) {
            $this->id = $id;
            $this->name = $name;
            $this->batch = $batch;
            $this->result = $result;
        }

        public function printResult() {
            echo "<h2>Student Result</h2>";
            // echo "ID: " . $this->id . "<br>";
            // echo "Name: " . $this->name . "<br>";
            // echo "Batch: " . $this->batch . "<br>";
            echo "Result: " . $this->result . "<br>";
        }

        public static function searchById($searchId) {

            $data = file('data.txt');
            

            foreach ($data as $line) {

                $line = trim($line);
                list($id, $name, $batch, $result) = explode(',', $line);
                
 
                if ($id == $searchId) {
                    return new Student($id, $name, $batch, $result);
                }
            }
            return null; 
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $studentId = intval($_POST['student_id']);

        $student = new Student($studentId, '', '', ''); // object creation
        $student = Student::searchById($studentId); //object calling the method using static method

        if ($student) {
            $student->printResult();
        } else {
            echo "<h3>No student found with ID: $studentId</h3>";
        }
    }
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Result Search</title>
</head>
<body>

    <form method="POST" action="">
        <label for="student_id">Enter Student ID:</label>
        <input type="number" name="student_id" id="student_id" required>
        <input type="submit" value="Search">
    </form>
</body>
</html>
