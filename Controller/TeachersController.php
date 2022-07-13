<?php
declare(strict_types = 1);

class TeachersController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {

        //Work with some Models here?

        //Display the Teachers View
        require 'View/teachers.php';
    }
}