<section>
    
    <h4>Edit Student Page</h4>

</section>

<section>

    <form action="index.php?page=students" method="post">

        <input type="hidden" name="student-id" value=<?php echo $studentToEdit->getId(); ?>>
        Name <input type="text" name="student-name" value= <?php echo $studentToEdit->getName(); ?> > 
        Email <input type="text" name="student-email" value= <?php echo $studentToEdit->getEmail(); ?> >
        Group
        <select name="student-group" id="">

            <option value='<?= $groupStudentToEdit->getId(); ?>'> <?= $groupStudentToEdit->getName(); ?> </option>

            <?php foreach($groupsArray as $group): ?>

            <option value='<?= $group->getId(); ?>'> <?= $group->getName(); ?> </option>

            <?php endforeach; ?>

        </select>
        <button type="submit" name="confirm-edit">CONFIRM</button>

    </form>

</section>


