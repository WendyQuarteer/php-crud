<?php
declare(strict_types=1);

class Database
{
    public function connect()
    {
        $username = $_ENV['username'];
        $password = $_ENV['password'];
        $localhost = $_ENV['localhost'];
        $dbname = $_ENV['dbname'];

        try {
            $dsn = "mysql:host=$localhost;dbname=$dbname";
            $pdo =  new PDO($dsn, $username, $password);
            // set the PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
//SET-UP DATABASE CONNECTION:
//create .env.sample.
//create .env (for each collaborator individually).
//add .env to .gitignore (!.env.sample).
//inside terminal: "composer require vlucas/phpdotenv",  to get the vendor-file.
//require .env in index.php.
//make model Database.php for connect()-method, try the connection.
//require model: Database in index.php.
//create a new Database in the homepageController.
//call the connect()-method in the homepageController.
