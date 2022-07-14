<?php
declare(strict_types=1);

require_once realpath(__DIR__ . "/vendor/autoload.php");//require .env
use Dotenv\Dotenv;
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

//include all your model files here
//require 'Model/User.php';
require 'Model/Database.php';
require 'Model/Student.php';
require 'Model/StudentLoader.php';
require 'Model/Group.php';
require 'Model/GroupLoader.php';
require 'Model/Teacher.php';
require 'Model/TeacherLoader.php';

//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/TeachersController.php';
require 'Controller/StudentsController.php';
require 'Controller/GroupsController.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

$controller = new HomepageController();

if(isset($_GET['page']) && $_GET['page'] === 'teachers') {
    $controller = new TeachersController();
} elseif(isset($_GET['page']) && $_GET['page'] === 'students'){
    $controller = new StudentsController();
} elseif(isset($_GET['page']) && $_GET['page'] === 'groups'){
    $controller = new GroupsController();
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