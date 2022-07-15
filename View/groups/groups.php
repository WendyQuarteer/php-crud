<?php require 'View/includes/header.php' ?>

<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->

<section>
    <h4>General Groups-page</h4>


    <p><a href="index.php?page=students">To Students</a></p>
    <p><a href="index.php?page=teachers">To Teachers</a></p>
    <p><a href="index.php?page=home">To Home</a></p>

</section>

<h2>DEMO TABLE</h2>
<section>
    <!-- make into button -->
    <p>create new</p>
    <span class="material-symbols-outlined">add_circle</span>

    <table style="border: 1px solid;">
        <!-- headings -->
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>CLASS LINK(query)</th>
            <th>TEACHER LINK(query)</th>
            <th>MODIFY</th>
            <th>DELETE/REMOVE RECORD</th>
        </tr>
        <!-- 1st row -->
        <tr>
            <td>123</td>
            <td>Wizard Wendy</td>
            <td>wendy@hogwarts.edu</td>
            <td>link</td>
            <td>link</td>
            <td><span class="material-symbols-outlined">edit</span></td>
            <td><span class="material-symbols-outlined">delete</span></td>
        </tr>
        <!--  -->
        <tr>
            <td>321</td>
            <td>Lucas El Leyenda</td>
            <td>luc@hogwarts.edu</td>
            <td>link</td>
            <td>link</td>
            <td><span class="material-symbols-outlined">edit</span></td>
            <td><span class="material-symbols-outlined">delete</span></td>
        </tr>
        <!--  -->
        <tr>
            <td>303</td>
            <td>Andy Potter</td>
            <td>andy@hogwarts.edu</td>
            <td>link</td>
            <td>link</td>
            <td><span class="material-symbols-outlined">edit</span></td>
            <td><span class="material-symbols-outlined">delete</span></td>
        </tr>

    </table>
</section>


<?php require 'View/includes/footer.php' ?>
// TODO: Add button to create.
// TODO: Add button to edit.
// TODO: Add button to delete.

