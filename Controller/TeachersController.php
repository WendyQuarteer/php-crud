<?php
declare(strict_types = 1);

class TeachersController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        //We are going to ask the DB for at least a teacher, a student and a group so we instantiate the loaders for each.
        $teacherLoader = new TeacherLoader();
        $studentLoader = new StudentLoader();
        $groupLoader= new GroupLoader();

        //Here we check if the user has clicked on an entity in specific, so in order to present the requested data
        //When the user clicks on an entity, a form is submitted and the action has a url with the 'type=detail' variable, so when that happens the below code is executed
        if(isset($GET['type']) && $GET['type'] === 'detail') {

            //We connect to the DB and ask it to return the clicked Teacher, passing in the $_POST variable stored from the form submit as a parameter
            $selectedTeacher = $teacherLoader->loadTeacherById($POST["selected-teacher"]);
            //With the clicked teacher instantiated, we can now also load in all the teacher students assigned by passing the teacher id as the method paramater
            //We can loop over this array of students and print them as a table in the view!
            $studentsAssigned = $studentLoader->loadTeacherStudents($selectedTeacher->getId());
            //We also want to get the group that the teacher teaches has, and also use the previously created teacher id to get this info
            $teacherGroup = $groupLoader->loadTeacherGroup($selectedTeacher->getId());
            
            //After we get all the variables we need, we require the detailed teacher view that will get this data and present it in a nice table
            require 'View/teachers/detailTeacher.php';

        } elseif(isset($GET['type']) && $GET['type'] === 'add'){
            
            require 'View/teachers/addTeacher.php';
            
        } elseif(isset($GET['type']) && $GET['type'] === 'confirmAdd'){
            
            $newTeacherName = $POST['teacher-name'];
            $newTeacherEmail = $POST['teacher-email'];
            
            if($newTeacherName && $newTeacherEmail) {
                
                $teacherLoader->createTeacher($newTeacherName, $newTeacherEmail);
                $teachersArray = $teacherLoader->loadTeachersLuk();
                require 'View/teachers/teachers.php';
                
            } else {
                
                echo "All Fields Must be Completed";
                require 'View/teachers/addTeacher.php';
                
            }
            
        // If the user hasnt clicked anything in specific and didnt submit any form yet, we just display all the teachers!
        } else {

            if(isset($POST['delete-teacher'])){

                $deletedTeacherId = $POST['delete-teacher'];
                $teacherLoader->deleteTeacher($deletedTeacherId);

                $teachersArray = $teacherLoader->loadTeachersLuk();
                require 'View/teachers/teachers.php';                

            } else {

                $teachersArray = $teacherLoader->loadTeachersLuk();
                require 'View/teachers/teachers.php';

            }

        }

    }
}