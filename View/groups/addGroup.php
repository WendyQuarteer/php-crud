<?php require 'View/includes/header.php' ?>

<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->

<section>
    <h4>Add-Group-page</h4>
    <p><a href="index.php?page=home">To Home</a></p>
    <p><a href="index.php?page=students">To Students</a></p>
    <p><a href="index.php?page=teachers">To Teachers</a></p>
    <p><a href="index.php?page=groups">To Groups</a></p>

    <form action="index.php?page=groups&type=confirmAdd" method="post">
        Name <input type="text" name="group-name"> 
        Location <input type="text" name="group-location">
        Teacher Assigned
        <select name="group-teacher" id="">

            <?php foreach($teachersArray as $teacher): ?>

            <option value='<?= $teacher->getId(); ?>'> <?= $teacher->getName(); ?> </option>

            <?php endforeach; ?>

        </select>
        <button type="submit">CONFIRM</button>

    </form>

</section>

<?php require 'View/includes/footer.php' ?>
