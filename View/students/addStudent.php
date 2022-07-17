<?php require 'View/includes/header.php' ?>

<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->

<section>

    <h4>Add Student Page</h4>

    <p><a href="index.php?page=home">To Home</a></p>
    <p><a href="index.php?page=students">To Students</a></p>
    <p><a href="index.php?page=teachers">To Teachers</a></p>
    <p><a href="index.php?page=groups">To Groups</a></p>

</section>

    <form action="index.php?page=students&type=confirmAdd" method="post">
        Name <input type="text" name="student-name"> 
        Email <input type="text" name="student-email">
        Group 
        <select name="student-group" id="">

            <?php foreach($allGroups as $group): ?>

            <option value='<?= $group->getId(); ?>'> <?= $group->getName(); ?> </option>

            <?php endforeach; ?>

        </select>
        <button type="submit">CONFIRM</button>

    </form>

</section>

<?php require 'View/includes/footer.php' ?>
