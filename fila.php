<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

try {
    // Create a PDO instance
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Query to get last 10 entries
    $sql = "SELECT * FROM contoare ORDER BY Id DESC LIMIT 10";
    
    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);
    
    // Execute the statement
    $stmt->execute();
    
    // Fetch all rows as an associative array
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Output data of each row
    foreach ($rows as $row) {
        // Output or process each row as needed
        echo "ID: " . $row["Id"]. " - Name: " . $row["Nume_contor"]. "<br>";
        // Adjust this according to your table structure
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage(); // Print out the error message
}

// Close connection
$conn = null;
?>