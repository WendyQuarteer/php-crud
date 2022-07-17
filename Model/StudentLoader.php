<?php
declare(strict_types=1);

class StudentLoader extends Database {

    public static function loadStudents(){

        $dbh = self::connect();
        $sql = "SELECT * FROM student_table";

        $query = $dbh->query($sql);

        $studentsArray = [];

        while($record = $query->fetch(PDO::FETCH_ASSOC)){
            $student = new Student($record, $record['group_id']);
            array_push($studentsArray, $student);
        }

        return $studentsArray;

    }

    public function loadStudentById($studentId){

        $dbh = self::connect();
        $sql = "SELECT * FROM student_table WHERE id=" . $studentId;

        $query = $dbh->query($sql);
        $record = $query->fetch(PDO::FETCH_ASSOC);

        return new Student($record, $record['group_id']);

    }

    public function loadTeacherStudents($teacherId){

        $dbh = self::connect();
        $sql = "SELECT s.*  FROM student_table s join group_table c on s.group_id = c.id JOIN teacher_table t ON c.teacher_assigned = t.id WHERE t.id =" . $teacherId;

        $query = $dbh->query($sql);

        $tStudentsArray = [];

        while($record = $query->fetch(PDO::FETCH_ASSOC)){
            $student = new Student($record, $record['group_id']);
            array_push($tStudentsArray, $student);
        }

        return $tStudentsArray;

    }

    public function createStudent($name, $email, $group_id){

        try {

            $dbh = self::connect();
            $sql = "INSERT INTO student_table (name, email, group_id) VALUES ('$name', '$email', $group_id)";
            $dbh->exec($sql);

        } catch(PDOException $e) {

            echo $sql . "<br>" . $e->getMessage();

          }
        

    }

    public function editStudent(){

        //Edit student

    }

    public function deleteStudent($studentId){

        try {

            $dbh = self::connect();
            $sql = "DELETE FROM student_table WHERE id=" . $studentId;
            $dbh->exec($sql);

        } catch(PDOException $e) {

            echo $sql . "<br>" . $e->getMessage();

          }

    }

}