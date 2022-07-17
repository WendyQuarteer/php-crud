<?php
declare(strict_types=1);

class GroupLoader extends Database {

    public static function loadGroups(){

        $dbh = self::connect();
        $sql = "SELECT * FROM group_table";

        $query = $dbh->query($sql);

        $groupsArray = [];

        while($record = $query->fetch(PDO::FETCH_ASSOC)){ 
             $group = new Group($record);
             array_push($groupsArray, $group);
        }

        return $groupsArray;

    }

    public function loadGroupById($groupId){

        $dbh = self::connect();
        $sql = "SELECT * FROM group_table WHERE id =" . $groupId;

        $query = $dbh->query($sql);

        return new Group($query->fetch(PDO::FETCH_ASSOC));

    }

    public function loadTeacherGroup($teacherId){

        $dbh = self::connect();
        $sql = "SELECT gt.* FROM group_table gt JOIN teacher_table tt ON gt.teacher_assigned = tt.id WHERE gt.teacher_assigned =" . $teacherId;
        $query = $dbh->query($sql);

        $record = $query->fetch(PDO::FETCH_ASSOC);

        if($record){

            return new Group($record);

        } else {

            return new Group(['id'=> 0, 'name'=> 'N/A', 'location'=>'N/A', 'teacher_assigned'=>0]);

        }

        
    }

    public function createGroup($name, $location, $group_teacher){

        try {

            $dbh = self::connect();
            $sql = "INSERT INTO group_table (name, location, teacher_assigned) VALUES ('$name', '$location', $group_teacher)";
            $dbh->exec($sql);

        } catch(PDOException $e) {

            echo $sql . "<br>" . $e->getMessage();

          }
        

    }

    public function editGroup(){

        //Edit Group

    }

    public function deleteGroup($groupId){

        try {

            $dbh = self::connect();
            $sql = "DELETE FROM group_table WHERE id=" . $groupId;
            $dbh->exec($sql);

        } catch(PDOException $e) {

            echo $sql . "<br>" . $e->getMessage();

          }

    }

}