<section>
    
    <h4>Detail Student Page</h4>

</section>

<section>

<table style="border: 1px solid black">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>GROUP</th>
            <th>TEACHER</th>
            <th>ACTIONS</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="padding: 5px; border: 1px solid black;"> <?php echo $selectedStudent->getId(); ?> </td>
            <td style="padding: 5px; border: 1px solid black;"> <?php echo $selectedStudent->getName(); ?> </td>
            <td style="padding: 5px; border: 1px solid black;"> <?php echo $selectedStudent->getEmail(); ?> </td>
            <td style="padding: 5px; border: 1px solid black;"> <form action="index.php?page=groups&type=detail" method="post"> <input name="selected-group" type="hidden" value=" <?= $selectedStudentsGroup->getId() ?> "> <button type="submit"> <?= $selectedStudentsGroup->getName() ?> </button> </form> </td>
            <td style="padding: 5px; border: 1px solid black;"> <form action="index.php?page=teachers&type=detail" method="post"> <input name="selected-teacher" type="hidden" value=" <?= $selectedStudentsTeacher->getId() ?> "> <button type="submit"> <?= $selectedStudentsTeacher->getName() ?> </button> </form> </td>
            <td style="padding: 5px; border: 1px solid black;"> <form action="index.php?page=students&type=edit" method="post"><input name="selected-student" type="hidden" value=" <?= $selectedStudent->getId() ?> "><button type="submit">EDIT</button></form></td>
        </tr>
    </tbody>
</table>

</section>

