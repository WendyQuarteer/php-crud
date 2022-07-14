<?php
declare(strict_types = 1);

class HomepageController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        $db = new Database();
        $db->connect();//call connect function from Database model.

        //Work with some Models here?

        //Display the Homepage View  
        require 'View/homepage.php';
    }
}
