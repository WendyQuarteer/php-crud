<section>

    <h4>Add Group Page</h4>

</section>

<section>

    <form action="index.php?page=groups" method="post">
        Name <input type="text" name="group-name"> 
        Location <input type="text" name="group-location">
        Teacher Assigned
        <select name="group-teacher" id="">

            <?php foreach($teachersArray as $teacher): ?>

            <option value='<?= $teacher->getId(); ?>'> <?= $teacher->getName(); ?> </option>

            <?php endforeach; ?>

        </select>
        <button type="submit" name="confirm-add">CONFIRM</button>

    </form>

</section>
