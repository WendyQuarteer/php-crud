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
            <th>-ID-</th>
            <th>-NAME</th>
            <th>-EMAIL</th>
            <th>-CLASS- LINK</th>
            <th>-TEACHER- LINK</th>
            <th>-MODIFY-</th>
            <th>-DELETE-</th>
        </tr>
        <?php foreach ($students as $student): ?>
        <tr>
            <td> <?= $student->getId() ?> </td>
            <td> <?= $student->getName() ?> </td>
            <td> <?= $student->getEmail() ?> </td>
            <td> <?= $groupName->getName()?> </td>
            <td> <?php //echo$teacher->getName() ?> </td>
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