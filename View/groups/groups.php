<?php require 'View/includes/header.php' ?>

<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->

<section>
    <h4>General Groups-page</h4>


    <p><a href="index.php?page=students">To Students</a></p>
    <p><a href="index.php?page=teachers">To Teachers</a></p>
    <p><a href="index.php?page=home">To Home</a></p>

</section>
<h2>GROUPS</h2>
<section>
    <!-- make into button -->
    <p>create new</p>
    <span class="material-symbols-outlined">add_circle</span>

    <table style="border: 1px solid;">
        <!-- headings -->
        <tr>
            <th>-ID-</th>
            <th>-NAME</th>
            <th>-LOCATION</th>
            <th>-TEACHER- LINK</th>
            <th>-STUDENTS- LINK</th>
            <th>-MODIFY-</th>
            <th>-DELETE-</th>
        </tr>
        <?php foreach ($groups as $group): ?>
            <tr>
                <td> <?= $group->getId() ?> </td>
                <td> <?= $group->getName() ?> </td>
                <td> <?= $group->getLocation() ?> </td>
                <td> <?= $group->getTeacherName()?> </td>
                <td> <?= $group->getStudentNames() ?> </td>
                <td><span class="material-symbols-outlined">edit</span></td>
                <td><span class="material-symbols-outlined">delete</span></td>
            </tr>
        <?php endforeach; ?>

    </table>
</section>


<?php require 'View/includes/footer.php' ?>
// TODO: Add button to create.
// TODO: Add button to edit.
// TODO: Add button to delete.

