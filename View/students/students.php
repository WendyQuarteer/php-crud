<?php require 'View/includes/header.php' ?>

<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->

<section>
    <h4>General Students-page</h4>

    <p><a href="index.php?page=home">To Home</a></p>
    <p><a href="index.php?page=teachers">To Teachers</a></p>
    <p><a href="index.php?page=groups">To Groups</a></p>


</section>

<!-- table test // hardcoded -->
<h2>DEMO TABLE</h2>
<section>
    <!-- make into button -->
    <form action="index.php?page=students&type=add" method="post"><button type="submit">ADD NEW STUDENT</button></form>

    <table style="border: 1px solid;">
        <!-- headings -->
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>CLASS LINK(query)</th>
            <th>TEACHER LINK(query)</th>
            <th>ACTION</th>
            
        </tr>

        <?php foreach($toBeUsedInView as $student): ?>
        
       <?php $group = $groupLoader->loadGroupById($student->getGroup()); ?>
       <?php $teacher = $teacherLoader->loadTeacherById($group->getTeacherAssigned()); ?>

         <tr>
            <td style="padding: 5px; border: 1px solid black;"> <?= $student->getId() ?> </td>
            <td style="padding: 5px; border: 1px solid black;"> <form action="index.php?page=students&type=detail" method="post"> <input name="selected-student" type="hidden" value=" <?= $student->getId() ?> "> <button type="submit"> <?= $student->getName() ?> </button> </form> </td>
            <td style="padding: 5px; border: 1px solid black;"> <?= $student->getEmail() ?> </td>
            <td style="padding: 5px; border: 1px solid black;"> <form action="index.php?page=groups&type=detail" method="post"> <input name="selected-group" type="hidden" value=" <?= $group->getId() ?> "> <button type="submit"> <?= $group->getName() ?> </button> </form> </td>
            <td style="padding: 5px; border: 1px solid black;">DELETE</td>
        </tr> 
        
         <?php endforeach; ?>

    </table>
</section>


<?php require 'View/includes/footer.php' ?>
