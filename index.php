<?php
declare(strict_types=1);

//include all your model files here
require 'Model/User.php';
//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/InfoController.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

$controller = new HomepageController();
if(isset($_GET['page']) && $_GET['page'] === 'info') {
    $controller = new InfoController();
}


$controller->render($_GET, $_POST);


//TODO: create .env-file
//TODO: set-up connection (pd)
//TODO: share database-tables
//TODO: set-up view/homeController = 4 pages / model:
    // general overview (+ edit & delete & create-new)
    // detailed overview (+ delete AND
                                        // if teacher assigned to class CAN'T REMOVE!!!
                                        // if you remove group then, remove link between student and class!!!
    // edit existing entity (very similar behaviour as create-page)
    // create new entity
//TODO: set-up models: (student, teacher)=>extend!, group
//TODO: set-up controllers: