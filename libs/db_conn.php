<?php
// Define a PHP class named DB responsible for managing database connections
class DB
{
    // Define database connection properties
    private $servername = "localhost"; // Change this to your database server name
    private $username = "root"; // Change this to your database username
    private $password = ""; // Change this to your database password
    private $dbname = "hotel_payroll"; // Change this to your database name
    private $conn;

    // Constructor method to initialize the database connection
    public function __construct()
    {
        // Create a new MySQLi connection
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        // Check for connection errors
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    // Public method to get the database connection object
    public function getConnection()
    {
        // Return the database connection object
        return $this->conn;
    }

    // Method to close the database connection
    public function closeConnection()
    {
        // Close the database connection
        $this->conn->close();
    }
}
