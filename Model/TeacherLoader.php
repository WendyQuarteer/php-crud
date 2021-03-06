<?php
declare(strict_types=1);

class TeacherLoader extends Database {

    //I need a method that will return me an array of all the teachers frm the teachers table, to be used in the controller si its available in the view
    public static function loadTeachers(){

        // We connect to the DB - a PDO (PHP DATA OBJECT) is now stored in $dbh
        $dbh = self::connect();

        //We make a sql query and store the string in $sql. In this case the query is straightforward- I want EVERYTHING from the teachers table
        $sql = "SELECT * FROM teacher_table";

        //We take the stored PDO in $dbh and call a default method called query that will return a pdo query in the $query variable
        $query = $dbh->query($sql);

        //since I want to return an iterable data type from this method, I create an empty array (to be returned after the logic has been implemented)
        $teachersArray = [];

        //This while loop will create a new record variable as long as the fetch method from query returns true(not null) and store the row of the table as an associative array
        while($record = $query->fetch(PDO::FETCH_ASSOC)){
            // for each iteration that the query returns true, we instantiate a new Teacher and store it in a variable $teacher
            $teacher = new Teacher($record);
            // for each iteration we push this teacher into the empty array (not empty anymore after the 1st iteration) previously created
            array_push($teachersArray, $teacher);
        }

        //return the array with all the contents from the fetched rows! - again, this will be used in the controller, to then be passed to the view
        return $teachersArray;

    }

    //load a teacher by a teacher assigned value (coming from a Group object)
    public function loadTeacherById($teacher_assigned){

        //make the connection
        $dbh = self::connect();

        //make the sql
        $sql = "SELECT * FROM teacher_table WHERE id =" . $teacher_assigned;

        //Actually query the sql
        $query = $dbh->query($sql);

        //In this case, since we really only want one item, an array is not needed to we can just directly return a new teacher
        //passing the response query as a construct parameter
        return new Teacher($query->fetch(PDO::FETCH_ASSOC));

    }

    public function createTeacher($name, $email){

        try {

            $dbh = self::connect();
            $sql = "INSERT INTO teacher_table (name, email) VALUES ('$name', '$email')";
            $dbh->exec($sql);

        } catch(PDOException $e) {

            echo $sql . "<br>" . $e->getMessage();

          }

    }

    public function editTeacher($name, $email, $id){

        $sql = "UPDATE teacher_table SET name=?, email=? WHERE id=?";
        $result = self::connect()->prepare($sql);
        $result->execute([$name, $email, $id]);

    }

    public function deleteTeacher($teacherId){

        try {

            $dbh = self::connect();
            $sql = "DELETE FROM teacher_table WHERE id=" . $teacherId;
            $dbh->exec($sql);

        } catch(PDOException $e) {

            echo "ERROR: cant delete teacher because its currently teaching another group";

          }

    }

}