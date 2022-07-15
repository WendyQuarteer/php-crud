<?php
declare(strict_types = 1);

class HomepageController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        $db = new Database();
        $pdo = $db->connect();//call connect function from Database model.

        //Work with some Models here?



              ///////////////TESTING PRINTS!!!

        // $studentCount = $pdo->query("SELECT * FROM student_table");
        // var_dump($studentCount);
        // $studentCount->fetch(PDO::FETCH_ASSOC);
        // echo($studentCount);

        // $studentCount = $pdo->query("SELECT COUNT(name) FROM student_table")->fetch(PDO::FETCH_ASSOC);

        // var_dump($studentCount);




                    // table with headings
                    echo('<table> <tr> <th>ID</th> <th>NAME</th> <th>EMAIL</th> </tr>'); ////////table with headings **** remember to END table!!!

                    // THIS WILL REPLACE NEXT LINE, with POST values            // $student = $pdo->query("SELECT * from student_table WHERE id = $_POST")->fetch(PDO::FETCH_ASSOC); //   THIS WILL BE LINKED TO POST???
                    $student = $pdo->query("SELECT * from student_table WHERE id = 6")->fetch(PDO::FETCH_ASSOC); 
                    echo( '<tr> <td>' .$student['id']. ' </td>');
                    echo( '<td>' .$student['name']. ' </td>');
                    echo( '<td>' .$student['email']. ' </td> </tr>'); // end table row
                    echo('</table>'); ///////end table
            
                    // foreach ($student as &$individualStudent) {
                    //     echo($individualStudent);
                    // }
            
            
            
                    // $student = $pdo->query("SELECT * from student_table LIMIT 1")->fetch(PDO::FETCH_ASSOC);
                    // echo('<a href="https://harrypotter.fandom.com/wiki/Harry_Potter">'.$student['name'].'</a>');
                    // var_dump($student['name']);
                    // echo($student['name']);
                    // echo('</br>'.$student['email']);
            
            
            
                    // TEST to dump all students
                    // $sql = 'SELECT student_table.name FROM student_table LIMIT 1'; // the query
                    // $testQuery = $pdoReturn->query($sql); //
                    // $testQueryFetched = $testQuery->fetch(PDO::FETCH_ASSOC);
                    // // var_dump($testQueryFetched);
                    // echo $testQueryFetched;

        //Display the Homepage View  
        require 'View/homepage.php';
    }
}
