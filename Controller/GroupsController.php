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
            
        } elseif(isset($GET['type']) && $GET['type'] === 'edit'){
            
            $groupToEditId = $POST['selected-group'];

            $groupToEdit = $groupLoader->loadGroupById($groupToEditId);
            $teacherGroupToEdit = $teacherLoader->loadTeacherById($groupToEdit->getTeacherAssigned());
            $teachersArray = $teacherLoader::loadTeachers();

            require 'View/groups/editGroup.php';

        } else {

            if(isset($POST['confirm-add'])){

                $newGroupName = $POST['group-name'];
                $newGroupLocation = $POST['group-location'];
                $newGroupTeacher = $POST['group-teacher'];
                
                if($newGroupName && $newGroupLocation && $newGroupTeacher) {
                    
                    $groupLoader->createGroup($newGroupName, $newGroupLocation, $newGroupTeacher);
                    
                } else {
                    
                    echo "All Fields Must be Completed";
                    $teachersArray = $teacherLoader::loadTeachers();
                    require 'View/groups/addGroup.php';
                    
                }

            }

            if(isset($POST['delete-group'])){

                $deletedGroupId = $POST['delete-group'];
                $groupLoader->deleteGroup($deletedGroupId);              

            } 

            if(isset($POST['confirm-edit'])){

                $newGroupName = $POST['group-name'];
                $newGroupLocation = $POST['group-location'];
                $newGroupTeacher = $POST['group-teacher'];
                $groupId = $POST['group-id'];

                if($newGroupName && $newGroupLocation && $newGroupTeacher && $groupId){

                    $groupLoader->editGroup($newGroupName, $newGroupLocation, $newGroupTeacher, $groupId);

                } else {

                    echo "Invalid fields entered. Aborting edit";

                }

            }

            $groupsArray = $groupLoader::loadGroups();
            require 'View/groups/groups.php';

        }

    }
}