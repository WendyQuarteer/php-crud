<?php
declare(strict_types=1);

class GroupLoader extends Database {

    public function loadGroups():array
    {
        $sql = "SELECT * FROM group_table";
        $query = $this->connect()->query($sql);
        $groupArray = [];
        while ($row = $query->fetch(PDO::FETCH_ASSOC)){
            $group = new Group($row);
            $groupArray[] = $group;
        }
        return $groupArray;
    }

    public function createGroup(){

        //Create Group

    }

    public function editGroup(){

        //Edit Group

    }

    public function deleteGroup(){

        //Delete Group

    }

}