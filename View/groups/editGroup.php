<section>
    
    <h4>Edit Group Page</h4>

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

