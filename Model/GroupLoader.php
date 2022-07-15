<?php
declare(strict_types=1);

class GroupLoader extends Database {

    public function loadGroups():array
    {
        $sql = "SELECT gt.id, gt.name, gt.location, tt.name AS teacherName, st.name AS studentName
       FROM group_table gt
           JOIN teacher_table tt
               JOIN student_table st
               ON gt.teacher_assigned = tt.id
                AND gt.id = st.group_id";
        $query = $this->connect()->query($sql);
        $groupArray = [];
        while ($row = $query->fetch(PDO::FETCH_ASSOC)){
            echo '<pre>' . var_dump($row) . '</pre>';
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