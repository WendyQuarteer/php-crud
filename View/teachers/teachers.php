<section>

    <h4>General Teachers Page</h4>

</section>

<section>
    <!-- make into button -->
    <form action="index.php?page=teachers&type=add" method="post"><button type="submit">ADD NEW TEACHER</button></form>

    <table style="border: 1px solid;">
        <!-- headings -->
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>ACTIONS</th>
        </tr>

        <?php foreach($teachersArray as $teacher): ?>

         <tr>
            <td style="padding: 5px; border: 1px solid black;"> <?= $teacher->getId() ?> </td>
            <td style="padding: 5px; border: 1px solid black;"> <form action="index.php?page=teachers&type=detail" method="post"> <input name="selected-teacher" type="hidden" value=" <?= $teacher->getId() ?> "> <button type="submit"> <?= $teacher->getName() ?> </button> </form> </td>
            <td style="padding: 5px; border: 1px solid black;"> <?= $teacher->getEmail() ?> </td>
            <td style="padding: 5px; border: 1px solid black;"> <form action="index.php?page=teachers" method="post"> <input name="delete-teacher" type="hidden" value=" <?= $teacher->getId() ?> "> <button type="submit"> DELETE </button> </form> </td>
        </tr> 
        
         <?php endforeach; ?>

    </table>
    
</section>

