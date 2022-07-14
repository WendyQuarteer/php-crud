<?php require 'includes/header.php'?>

<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->

<section>
    <h4>Hello From the Homepage View</h4>

    <p><a href="index.php?page=students">To Students</a></p>
    <p><a href="index.php?page=teachers">To Teachers</a></p>
    <p><a href="index.php?page=groups">To Groups</a></p>

    <!-- <h4>Hello <?php //echo $user->getName()?>,</h4> -->

    <!-- <p><a href="index.php?page=info">To info page</a></p> -->

</section>

<?php require 'includes/footer.php'?>