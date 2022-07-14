<?php
declare(strict_types=1);

class GroupLoader extends Database {

    public function loadGroups():void//TODO: change to array
    {
        $sql = "SELECT * FROM group_table";
        $query = $this->connect()->query($sql);
        $groupArray = [];
        while ($row = $query->fetch(PDO::FETCH_ASSOC)){
            $group = new Group($row);
            $groupArray[] = $group;
        }
        var_dump($groupArray);//TODO: change to return
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