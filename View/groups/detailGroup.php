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
            <td> <?php echo $selectedGroup->getId(); ?> </td>
            <td> <?php echo $selectedGroup->getName(); ?> </td>
            <td> <?php echo $selectedGroup->getLocation(); ?> </td>
            <td> <?php echo $selectedGroup->getTeacherAssigned(); ?></td>
            <td>STUDENTS ASSIGNED</td>
            <td>EDIT</td>
        </tr>
    </tbody>
</table>

</section>

<?php require 'View/includes/footer.php' ?>
// TODO: Add button to delete.