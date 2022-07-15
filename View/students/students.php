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
    <p>create new</p>
    <span class="material-symbols-outlined">add_circle</span>

    <table style="border: 1px solid;">
        <!-- headings -->
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>CLASS LINK(query)</th>
            <th>TEACHER LINK(query)</th>
            <th>MODIFY</th>
            <th>DELETE/REMOVE RECORD</th>
        </tr>

        <?php foreach($toBeUsedInView as $student): ?>
        
       <?php $group = $groupLoader->loadGroupById($student->getGroup()); ?>
       <?php $teacher = $teacherLoader->loadTeacherById($group->getTeacherAssigned()); ?>

         <tr>
            <td> <?= $student->getId() ?> </td>
            <td> <?= $student->getName() ?> </td>
            <td> <?= $student->getEmail() ?> </td>
            <!-- <td> <?= $group->getName() ?> </td> -->
            <td> <form action="index.php?page=groups&type=detail" method="post"> <input name="selected-group" type="hidden" value=" <?= $group->getId() ?> "> <button type="submit"> <?= $group->getName() ?> </button> </form> </td>
            <td> <form action="index.php?page=teachers&type=detail" method="post"> <input type="hidden" value=" <?= $teacher->getId() ?> "> <button type="submit"> <?= $teacher->getName() ?> </button> </form> </td>
            <!-- <td><span class="material-symbols-outlined">edit</span></td>
            <td><span class="material-symbols-outlined">delete</span></td> -->
        </tr> 
        
         <?php endforeach; ?>

    </table>
</section>


<?php require 'View/includes/footer.php' ?>
// TODO: Add button to create.
// TODO: Add button to edit.
// TODO: Add button to delete.