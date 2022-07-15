<?php require 'View/includes/header.php' ?>

<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->

<section>
    <h4>General Groups-page</h4>

    <p><a href="index.php?page=students">To Students</a></p>
    <p><a href="index.php?page=teachers">To Teachers</a></p>
    <p><a href="index.php?page=home">To Home</a></p>


</section>

<!-- table test // hardcoded -->
<h2>DEMO TABLE</h2>
<section>
    <!-- make into button -->
    <span class="material-symbols-outlined">add_circle</span>

    <table style="border: 1px solid;">
        <!-- headings -->
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>LOCATION</th>
            <th>TEACHER</th>
            <th>ACTIONS</th>
        </tr>

        <?php foreach($groupsArray as $group): ?>

         <tr>
            <td style="padding: 5px; border: 1px solid black;"> <?= $group->getId() ?> </td>
            <td style="padding: 5px; border: 1px solid black;"> <?= $group->getName() ?> </td>
            <td style="padding: 5px; border: 1px solid black;"> <?= $group->getLocation() ?> </td>
            <td style="padding: 5px; border: 1px solid black;"> <?= $group->getTeacherAssigned() ?> </td>
            <td style="padding: 5px; border: 1px solid black;"> DELETE </td>
        </tr> 
        
         <?php endforeach; ?>

    </table>
</section>


<?php require 'View/includes/footer.php' ?>

