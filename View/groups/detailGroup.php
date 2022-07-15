<?php require 'View/includes/header.php' ?>

<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->



<section>
    <h4>DETAIL Group-page</h4>
    <p><a href="index.php?page=home">To Home</a></p>
    <p><a href="index.php?page=students">To Students</a></p>
    <p><a href="index.php?page=teachers">To Teachers</a></p>
    <p><a href="index.php?page=groups">To Groups</a></p>

<table style="border: 1px solid black">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>LOCATION</th>
            <th>TEACHER</th>
            <th>STUDENTS</th>
            <th>ACTIONS</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="padding: 5px; border: 1px solid black;"> <?php echo $selectedGroup->getId(); ?> </td>
            <td style="padding: 5px; border: 1px solid black;"> <?php echo $selectedGroup->getName(); ?> </td>
            <td style="padding: 5px; border: 1px solid black;"> <?php echo $selectedGroup->getLocation(); ?> </td>
            <td style="padding: 5px; border: 1px solid black;"> <?php echo $selectedGroup->getTeacherAssigned(); ?></td>
            <td style="padding: 5px; border: 1px solid black;">STUDENTS ASSIGNED</td>
            <td style="padding: 5px; border: 1px solid black;">EDIT</td>
        </tr>
    </tbody>
</table>

</section>

<?php require 'View/includes/footer.php' ?>
// TODO: Add button to delete.