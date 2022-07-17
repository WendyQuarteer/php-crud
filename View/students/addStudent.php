<section>

    <h4>Add Student Page</h4>

</section>

    <form action="index.php?page=students" method="post">
        Name <input type="text" name="student-name"> 
        Email <input type="text" name="student-email">
        Group 
        <select name="student-group" id="">

            <?php foreach($allGroups as $group): ?>

            <option value='<?= $group->getId(); ?>'> <?= $group->getName(); ?> </option>

            <?php endforeach; ?>

        </select>
        <button type="submit" name="confirm-add">CONFIRM</button>

    </form>

</section>

