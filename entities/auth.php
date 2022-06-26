<?php

require_once(__DIR__ . "/connect.php");
require_once(__DIR__ . "/../helpers/uuid.php");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class Auth
{
    private $_id;
    private $role;
    private $isActive;
    private $rollNumber;
    private $password;
    public function __construct($rollNumber, $role)
    {
        $this->_id = guidv4();
        $this->role = $role;
        $this->isActive = 1;
        $this->rollNumber = $rollNumber;
    }
    public function setPassword($password)
    {
        $this->password = md5($password);
    }
    // Only main admin can do this
    public static function disableAccount($_id)
    {
        $sessionData = [];
        $conn = Connect::createConnection();
        $stmt = $conn->prepare("update auth set isActive = 0  where _id = ? and not role = 0 ");
        $stmt->bind_param("s", $_id);
        $stmt->execute();
        $affectedRows = $stmt->affected_rows;
        Connect::closeConnection($conn, $stmt);
        if ($affectedRows) {
            return 1;
        }
        return 0;
    }
    // Only admin can do this
    public static function enableAccount($_id)
    {
        $sessionData = [];
        $conn = Connect::createConnection();
        $stmt = $conn->prepare("update auth set isActive = 1  where _id = ? ");
        $stmt->bind_param("s", $_id);
        $stmt->execute();
        $affectedRows = $stmt->affected_rows;
        Connect::closeConnection($conn, $stmt);
        if ($affectedRows) {
            return 1;
        }
        return 0;
    }
    // Only admin can do this
    public function addMembers()
    {
        $conn = Connect::createConnection();
        $stmt = $conn->prepare("insert into auth (_id,role,isActive,rollNumber,password) value (?,?,?,?,?)");
        $stmt->bind_param("sssss", $this->_id, $this->role, $this->isActive, $this->rollNumber, $this->password);
        $rows = $stmt->execute();
        echo $stmt->affected_rows;
        Connect::closeConnection($stmt, $conn);
        if ($rows) {
            return 1;
        }
        return 0;
    }
    // Everyone can do this
    public static function login($rollNumber, $pass, $role)
    {
        $sessionData = [];
        $pass = md5($pass);
        $conn = Connect::createConnection();
        $stmt = $conn->prepare("select * from auth where rollNumber = ? and password = ? and role = ? and isActive = 1 ");
        $stmt->bind_param("sss", $rollNumber, $pass, $role);
        $stmt->execute();
        if ($stmt->affected_rows) {
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            $sessionData["_id"] =  $user['_id'] || null;
            $sessionData["rollNumber"] = $user['rollNumber'] || null;
            $sessionData["role"] = $user['role'] || null;

            return $sessionData;
        }
        Connect::closeConnection($stmt, $conn);
        return null;
    }
}

// Login checked
// $t1 = Auth::login("19CSE10", "19CSE10", 2);
// print_r($t1);

// Adding members checked
// $t2 = new Auth("19CSE10", 2);
// $t2->setPassword("19CSE10");
// echo $t2->addMembers();

// Disablling account checked
// echo Auth::disableAccount("ece0362d-0589-4a66-a43a-dc4de49b3b72");

// Enabling account checked
// echo Auth::enableAccount("ece0362d-0589-4a66-a43a-dc4de49b3b72");
