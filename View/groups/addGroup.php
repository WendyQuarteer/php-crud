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
        Email <input type="text" name="group-email">
        <button type="submit">CONFIRM</button>

    </form>

</section>

<?php require 'View/includes/footer.php' ?>
