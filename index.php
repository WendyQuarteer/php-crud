<?php
declare(strict_types=1);

require_once realpath(__DIR__ . "/vendor/autoload.php");//require .env
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

//include all your model files here
require 'Model/User.php';
require 'Model/Database.php';
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


//TODO:create .env-file
//TODO: set-up connection (pd)
//TODO: inside terminal: composer require vlucas/phpdotenv,  to get the vendor-file
//TODO: share database-tables
//TODO: set-up view/homeController = 4 pages / model:
    // general overview (+ edit & delete & create-new)
    // detailed overview (+ delete AND
                                        // if teacher assigned to class CAN'T REMOVE!!!
                                        // if you remove group then, remove link between student and class!!!
    // edit existing entity (very similar behaviour as create)
    // create new entity
//TODO: set-up models: (student, teacher)=>extend!, group with a loader for each extended + database
//TODO: set-up controllers: