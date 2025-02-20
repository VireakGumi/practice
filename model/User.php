<?php
// _____________ TO DO: ___________
class User
{
    public $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // create function execution query 
    public function execute($query, $params = [])
    {
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute($params);
            return ['message' => 'query executed successfully', 'status' => 200]; 
        } catch (PDOException $e) {
            return ['message' => $e->getMessage(), 'status' => 404];
        }
    }

    // create function execution of get user
    public function show($query, $params = [])
    {
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute($params);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) { {
                echo "Error: " . $e->getMessage();
            }
        }
    }
}
