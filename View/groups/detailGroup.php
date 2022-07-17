<?php require 'View/includes/header.php' ?>

<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->



<section>
    <h4>Detail Group Page</h4>

    <p><a href="index.php?page=home">To Home</a></p>
    <p><a href="index.php?page=students">To Students</a></p>
    <p><a href="index.php?page=teachers">To Teachers</a></p>
    <p><a href="index.php?page=groups">To Groups</a></p>

</section>

<section>

<table style="border: 1px solid black">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>LOCATION</th>
            <th>TEACHER</th>
            <th>ACTIONS</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="padding: 5px; border: 1px solid black;"> <?php echo $selectedGroup->getId(); ?> </td>
            <td style="padding: 5px; border: 1px solid black;"> <?php echo $selectedGroup->getName(); ?> </td>
            <td style="padding: 5px; border: 1px solid black;"> <?php echo $selectedGroup->getLocation(); ?> </td>
            <td style="padding: 5px; border: 1px solid black;"> <form action="index.php?page=teachers&type=detail" method="post"> <input name="selected-teacher" type="hidden" value=" <?= $selectedGroupsTeacher->getId() ?> "> <button type="submit"> <?= $selectedGroupsTeacher->getName() ?> </button> </form> </td>
            <td style="padding: 5px; border: 1px solid black;"> <form action="index.php?page=groups&type=edit" method="post"><input name="selected-group" type="hidden" value=" <?= $selectedGroup->getId() ?> "><button type="submit">EDIT</button></form></td>
        </tr>
    </tbody>
</table>

<h3>Students Assigned</h3>

<table style="border: 1px solid;">
        <!-- headings -->
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
        </tr>

        <?php foreach($studentsAssigned as $student): ?>

         <tr>
            <td style="padding: 5px; border: 1px solid black;"> <?= $student->getId() ?> </td>
            <td style="padding: 5px; border: 1px solid black;"> <form action="index.php?page=students&type=detail" method="post"> <input name="selected-student" type="hidden" value=" <?= $student->getId() ?> "> <button type="submit"> <?= $student->getName() ?> </button> </form> </td>
            <td style="padding: 5px; border: 1px solid black;"> <?= $student->getEmail() ?> </td>
            
        </tr> 
        
         <?php endforeach; ?>

    </table>

</section>

<?php require 'View/includes/footer.php' ?>
