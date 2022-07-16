<?php require 'View/includes/header.php' ?>

<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->



<section>
    <h4>Detail Student-page</h4>
    <p><a href="index.php?page=home">To Home</a></p>
    <p><a href="index.php?page=students">To Students</a></p>
    <p><a href="index.php?page=teachers">To Teachers</a></p>
    <p><a href="index.php?page=groups">To Groups</a></p>

<table style="border: 1px solid black">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>GROUP</th>
            <th>TEACHER</th>
            <th>ACTIONS</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="padding: 5px; border: 1px solid black;"> <?php echo $selectedStudent->getId(); ?> </td>
            <td style="padding: 5px; border: 1px solid black;"> <?php echo $selectedStudent->getName(); ?> </td>
            <td style="padding: 5px; border: 1px solid black;"> <?php echo $selectedStudent->getEmail(); ?> </td>
            <td style="padding: 5px; border: 1px solid black;"> <form action="index.php?page=groups&type=detail" method="post"> <input name="selected-group" type="hidden" value=" <?= $selectedStudentsGroup->getId() ?> "> <button type="submit"> <?= $selectedStudentsGroup->getName() ?> </button> </form> </td>
            <td style="padding: 5px; border: 1px solid black;"> <form action="index.php?page=teachers&type=detail" method="post"> <input name="selected-teacher" type="hidden" value=" <?= $selectedStudentsTeacher->getId() ?> "> <button type="submit"> <?= $selectedStudentsTeacher->getName() ?> </button> </form> </td>
            <td style="padding: 5px; border: 1px solid black;">EDIT</td>
        </tr>
    </tbody>
</table>

</section>

<?php require 'View/includes/footer.php' ?>
// TODO: Add button to delete.