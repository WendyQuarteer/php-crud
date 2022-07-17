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
            //echo '<pre>' . var_dump($groupArray) . '</pre>';
        }
        return $groupArray;
    }

   //function needed to get the student's groupName's:
    public function loadGroupsByName(){ //We have the group_id already in the student-class.
        $sql = "SELECT gt.* FROM group_table gt  JOIN student_table st ON gt.id = st.group_id";
        $query = $this->connect()->query($sql);
        $gr = $query->fetch(PDO::FETCH_ASSOC);
        $group = new Group ($gr);
        //echo '<pre>' . var_dump($group) . '</pre>';

        return $group;//We return a new Group with the data we just querried.
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