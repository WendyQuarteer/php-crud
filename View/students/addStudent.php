<?php require 'View/includes/header.php' ?>

<section>
    <form method ="post">
        <fieldset> <!--used to group related items in a form-->
            <legend>New Student</legend><!--used to define a caption for the fieldset element-->
            <label for="name">Name:</label><!--defines a label for the input-->
            <input type="text" id="name" name="name" autocomplete="off" autofocus>
            <label for="email">Email:</label>
            <input type="email" id="email" accept="#" autocomplete="off" autofocus>
        </fieldset>
        <button type="submit">Submit</button>
    </form>
</section>

<?php require 'View/includes/footer.php' ?>