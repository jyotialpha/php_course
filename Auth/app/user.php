<?php
include_once 'database.php';

class User extends Database
{
  private $table_name = "users";
  public $id;
  public $name;
  public $email;
  public $password;


  // User registration
  public function register()
  {
    // Hash the password for security
    $hashed_password = password_hash($this->password, PASSWORD_DEFAULT);

    // Prepare an insert statement
    $query = "INSERT INTO " . $this->table_name . " (name, email, password) VALUES (:name, :email, :password)";
    $stmt = $this->getConnection()->prepare($query);

    // Bind the parameters
    $stmt->bindParam(':name', $this->name);
    $stmt->bindParam(':email', $this->email);
    $stmt->bindParam(':password', $hashed_password);

    // Execute the query
    if ($stmt->execute()) {
      return true;
    } else {
      return false;
    }
  }

  //user login
  public function login()
  {
    // Prepare query to find user by email
    $query = "SELECT id, password FROM " . $this->table_name . " WHERE email = :email LIMIT 1";
    $stmt = $this->getConnection()->prepare($query);

    // Bind parameter
    $stmt->bindParam(':email', $this->email);

    // Execute the query
    $stmt->execute();

    // Check if user exists
    if ($stmt->rowCount() > 0) {
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      // Verify the password
      if (password_verify($this->password, $row['password'])) {
        return true; // Login successful
      } else {
        return false; // Password incorrect
      }
    } else {
      return false; // User not found
    }
  }
}
