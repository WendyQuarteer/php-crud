<?php
declare(strict_types = 1);

class GroupsController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        $groupLoader = new GroupLoader();
        $teacherLoader = new TeacherLoader();
        $studentLoader = new StudentLoader();

        if(isset($GET['type']) && $GET['type'] === 'detail') {

            $selectedGroup = $groupLoader->loadGroupById($POST["selected-group"]);
            $selectedGroupsTeacher = $teacherLoader->loadTeacherById($selectedGroup->getTeacherAssigned());
            $studentsAssigned = $studentLoader->loadTeacherStudents($selectedGroupsTeacher->getId());
            
            require 'View/groups/detailGroup.php';

        } else {

            $groupsArray = $groupLoader->loadGroupsLuk();

            require 'View/groups/groups.php';

        }

        //Display the Groups View
        // require 'View/groups/editGroup.php';
        // require 'View/groups/deleteGroup.php';

    }
}