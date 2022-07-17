<section>
    <h4>Edit Teacher Page</h4>
</section>

<section>

    <form action="index.php?page=teachers" method="post">

        <input type="hidden" name="teacher-id" value= '<?php echo $teacherToEdit->getId(); ?>' >
        Name <input type="text" name="teacher-name" value= '<?php echo $teacherToEdit->getName(); ?>' > 
        Email <input type="text" name="teacher-email" value= '<?php echo $teacherToEdit->getEmail(); ?>' >
        <button type="submit" name="confirm-edit">CONFIRM</button>

    </form>

</section>


