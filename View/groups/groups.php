<section>
    
    <h4>General Groups Page</h4>

</section>

<section>
    <!-- make into button -->
    <form action="index.php?page=groups&type=add" method="post"><button type="submit">ADD NEW GROUP</button></form>

    <table style="border: 1px solid;">
        <!-- headings -->
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>LOCATION</th>
            <th>TEACHER</th>
            <th>ACTIONS</th>
        </tr>

        <?php foreach($groupsArray as $group): ?>

           <?php $teacher = $teacherLoader->loadTeacherById($group->getTeacherAssigned());  ?>

         <tr>
            <td style="padding: 5px; border: 1px solid black;"> <?= $group->getId() ?> </td>
            <td style="padding: 5px; border: 1px solid black;"> <form action="index.php?page=groups&type=detail" method="post"> <input name="selected-group" type="hidden" value=" <?= $group->getId() ?> "> <button type="submit"> <?= $group->getName() ?> </button> </form> </td>
            <td style="padding: 5px; border: 1px solid black;"> <?= $group->getLocation() ?> </td>
            <td style="padding: 5px; border: 1px solid black;"> <form action="index.php?page=teachers&type=detail" method="post"> <input name="selected-teacher" type="hidden" value=" <?= $teacher->getId() ?> "> <button type="submit"> <?= $teacher->getName() ?> </button> </form> </td>
            <td style="padding: 5px; border: 1px solid black;"> <form action="index.php?page=groups" method="post"> <input name="delete-group" type="hidden" value=" <?= $group->getId() ?> "> <button type="submit"> DELETE </button> </form> </td>
        </tr> 
        
         <?php endforeach; ?>

    </table>
</section>


