<?php 
class Dbh {
    private $host = "mysql"; // Database host
    private $user = "root";      // Database username
    private $pass = "rootpassword";          // Database password
    private $dbname = "LearningSql";  // Database name

    protected function connect() {
        try {
            // Create a DSN (Data Source Name)
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;

            // Create a PDO instance
            $pdo = new PDO($dsn, $this->user, $this->pass);

            // Set PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo; // Return the PDO instance
        } catch (PDOException $e) {
            // Handle connection errors
            echo "Connection failed: " . $e->getMessage();
            exit;
        }
    }
}

?>