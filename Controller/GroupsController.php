<?php
declare(strict_types = 1);

class GroupsController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        $groupLoader = new GroupLoader();
        $groups = $groupLoader->loadGroups();


        //Display the Groups View
        require 'View/groups/groups.php';
        require 'View/groups/detailGroup.php';
        require 'View/groups/editGroup.php';
        require 'View/groups/deleteGroup.php';

    }
}