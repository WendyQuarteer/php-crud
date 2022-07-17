<section>

    <h4>Detail Teacher Page</h4>

</section>

<table style="border: 1px solid black">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>TEACHES GROUP</th>
            <th>ACTIONS</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="padding: 5px; border: 1px solid black;"> <?php echo $selectedTeacher->getId(); ?> </td>
            <td style="padding: 5px; border: 1px solid black;"> <?php echo $selectedTeacher->getName(); ?> </td>
            <td style="padding: 5px; border: 1px solid black;"> <?php echo $selectedTeacher->getEmail(); ?> </td>
            <td style="padding: 5px; border: 1px solid black;"> <?php echo $teacherGroup->getName(); ?></td>
            <td style="padding: 5px; border: 1px solid black;">EDIT</td>
        </tr>
    </tbody>
</table>

<h3>Students Assigned</h3>

<table style="border: 1px solid;">
        <!-- headings -->
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
        </tr>

        <?php foreach($studentsAssigned as $student): ?>

         <tr>
            <td style="padding: 5px; border: 1px solid black;"> <?= $student->getId() ?> </td>
            <td style="padding: 5px; border: 1px solid black;"> <form action="index.php?page=students&type=detail" method="post"> <input name="selected-student" type="hidden" value=" <?= $student->getId() ?> "> <button type="submit"> <?= $student->getName() ?> </button> </form> </td>
            <td style="padding: 5px; border: 1px solid black;"> <?= $student->getEmail() ?> </td>
            
        </tr> 
        
         <?php endforeach; ?>

    </table>

</section>

