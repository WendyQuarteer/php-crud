<section>
    
    <h4>General Students Page</h4>

</section>

<section>
    <!-- make into button -->
    <form action="index.php?page=students&type=add" method="post"><button type="submit">ADD NEW STUDENT</button></form>

    <table style="border: 1px solid;">
        <!-- headings -->
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>GROUP</th>
            <th>TEACHER</th>
            <th>ACTION</th>
        </tr>

        <?php foreach($studentsArray as $student): ?>
        
       <?php $group = $groupLoader->loadGroupById($student->getGroup()); ?>
       <?php $teacher = $teacherLoader->loadTeacherById($group->getTeacherAssigned()); ?>

         <tr>
            <td style="padding: 5px; border: 1px solid black;"> <?= $student->getId() ?> </td>
            <td style="padding: 5px; border: 1px solid black;"> <form action="index.php?page=students&type=detail" method="post"> <input name="selected-student" type="hidden" value=" <?= $student->getId() ?> "> <button type="submit"> <?= $student->getName() ?> </button> </form> </td>
            <td style="padding: 5px; border: 1px solid black;"> <?= $student->getEmail() ?> </td>
            <td style="padding: 5px; border: 1px solid black;"> <form action="index.php?page=groups&type=detail" method="post"> <input name="selected-group" type="hidden" value=" <?= $group->getId() ?> "> <button type="submit"> <?= $group->getName() ?> </button> </form> </td>
            <td style="padding: 5px; border: 1px solid black;"> <form action="index.php?page=teachers&type=detail" method="post"> <input name="selected-teacher" type="hidden" value=" <?= $teacher->getId() ?> "> <button type="submit"> <?= $teacher->getName() ?> </button> </form> </td>
            <td style="padding: 5px; border: 1px solid black;"> <form action="index.php?page=students" method="post"> <input name="delete-student" type="hidden" value=" <?= $student->getId() ?> "> <button type="submit"> DELETE </button> </form> </td>
        </tr> 
        
         <?php endforeach; ?>

    </table>
</section>

