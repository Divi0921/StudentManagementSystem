<?php

class Connect
{
    public static function createConnection()
    {
        $servername = "localhost";
        $username = "root";
        $password = "password";
        $dbname = "sms";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }

    public static function closeConnection($stmt, $conn)
    {
        $stmt->close();
        $conn->close();
    }

}

?>