<?php
declare(strict_types = 1);

class GroupsController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        $groupLoader = new GroupLoader();

        $groupLoader->loadGroups();

        //Display the Groups View
        require 'View/groups.php';
    }
}