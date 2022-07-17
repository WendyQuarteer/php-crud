<?php
declare(strict_types = 1);

class GroupsController
{

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

        } elseif(isset($GET['type']) && $GET['type'] === 'add'){
            
            $teachersArray = $teacherLoader::loadTeachers();
            require 'View/groups/addGroup.php';
            
        } elseif(isset($GET['type']) && $GET['type'] === 'confirmAdd'){
            
            $newGroupName = $POST['group-name'];
            $newGroupLocation = $POST['group-location'];
            $newGroupTeacher = $POST['group-teacher'];
            
            if($newGroupName && $newGroupLocation && $newGroupTeacher) {
                
                $groupLoader->createGroup($newGroupName, $newGroupLocation, $newGroupTeacher);
                $groupsArray = $groupLoader::loadGroups();
                require 'View/groups/groups.php';
                
            } else {
                
                echo "All Fields Must be Completed";
                $teachersArray = $teacherLoader::loadTeachers();
                require 'View/groups/addGroup.php';
                
            }

        } else {

            if(isset($POST['delete-group'])){

                $deletedGroupId = $POST['delete-group'];
                $groupLoader->deleteGroup($deletedGroupId);              

            } 

            $groupsArray = $groupLoader::loadGroups();
            require 'View/groups/groups.php';

        }

    }
}