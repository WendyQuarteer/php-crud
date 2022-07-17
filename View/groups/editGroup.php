<?php require 'View/includes/header.php' ?>

<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->

<section>
    <h4>Edit Group Page</h4>

    <p><a href="index.php?page=home">To Home</a></p>
    <p><a href="index.php?page=students">To Students</a></p>
    <p><a href="index.php?page=teachers">To Teachers</a></p>
    <p><a href="index.php?page=groups">To Groups</a></p>

</section>

<section>

    <form action="index.php?page=groups" method="post">

        <input type="hidden" name="group-id" value=<?php echo $groupToEdit->getId(); ?>>
        Name <input type="text" name="group-name" value= <?php echo $groupToEdit->getName(); ?> > 
        Location <input type="text" name="group-location" value= <?php echo $groupToEdit->getLocation(); ?> >
        Teacher Assigned
        <select name="group-teacher" id="">

            <option value='<?= $teacherGroupToEdit->getId(); ?>'> <?= $teacherGroupToEdit->getName(); ?> </option>

            <?php foreach($teachersArray as $teacher): ?>

            <option value='<?= $teacher->getId(); ?>'> <?= $teacher->getName(); ?> </option>

            <?php endforeach; ?>

        </select>
        <button type="submit" name="confirm-edit">CONFIRM</button>

    </form>

</section>

<?php require 'View/includes/footer.php' ?>
