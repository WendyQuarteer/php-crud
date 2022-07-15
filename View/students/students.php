<?php require 'View/includes/header.php' ?>

<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->

<section>
    <h4>General Students-page</h4>

    <p><a href="index.php?page=home">To Home</a></p>
    <p><a href="index.php?page=teachers">To Teachers</a></p>
    <p><a href="index.php?page=groups">To Groups</a></p>


</section>

<!-- table test // hardcoded -->
<section>
    <table style="border: 1px solid;">
        <!-- headings -->
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
        </tr>
        <!-- 1st row -->
        <tr>
            <td>123</td>
            <td>Andy Potter</td>
            <td>andy@hogwarts.edu</td>
        </tr>
        
    </table>
</section>


<?php require 'View/includes/footer.php' ?>
// TODO: Add button to create.
// TODO: Add button to edit.
// TODO: Add button to delete.