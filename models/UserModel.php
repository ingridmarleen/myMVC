<?php
namespace myMvc\Models;

use myMvc\Services\Database;

    class UserModel {
        
        public function __construct() {
            ;
        }
        
        /**
         * View all userdata
         * @return ass array
         */
        public function getArray() {
            
            # Prepare and execute query
            $sql = "SELECT * FROM user";
            $stmt = Database::conn()->prepare($sql);
            $stmt->execute();
            
            # Fetch all records into an array
            $collection = $stmt->fetchAll();
            
            # Return the collection
            return $collection;
                    
        }
        
        /**
         * View userdata one user
         * @param int $id
         * @return array row
         */
        public function getRow($id) {
            
            # Prepare and execute query
            $sql = "SELECT * FROM user WHERE id=:id";
            $stmt = Database::conn()->prepare($sql);
            $stmt->bindparam(":id", $id);   
            $stmt->execute();
            
            $row = $stmt->fetch();
            
            return $row;
            
        }
        
        /**
         * Create a user in the database
         * @param type $name
         * @param type $email
         * @param type $username
         * @param type $password
         * @return string
         */
        public function register($name,$email,$username,$password) {
            
            # Hashing password
            $new_password = password_hash($password, PASSWORD_DEFAULT);
            
            $sql = "INSERT INTO 
                        user(name,email,username,password) 
                    VALUES
                        (:name, :email, :username, :password)
                    ";
            
            $stmt = Database::conn()->prepare($sql);

            $stmt->bindparam(":name", $name);
            $stmt->bindparam(":email", $email);
            $stmt->bindparam(":username", $username);
            $stmt->bindparam(":password", $new_password);										  

            $stmt->execute();
            
            return Database::conn()->lastInsertId();
	
        }
        
        /**
         * Update the data of the user in the database
         * @param int $id
         * @return string
         */
        public function update($id) {
            
            $sql = "UPDATE 
                        user 
                    SET 
                        name        = :name,
                        email       = :email,
                        username    = :username
                    WHERE
                        id = :id
            ";

            $stmt = Database::conn()->prepare($sql);

            $name = $_POST['name'];
            $email = $_POST['email'];
            $username = $_POST['username'];

            $stmt->bindparam(":id", $id);
            $stmt->bindparam(":name", $name);
            $stmt->bindparam(":email", $email);
            $stmt->bindparam(":username", $username);

            $stmt->execute();
                        
            return Database::conn()->lastInsertId();
            
        }
        
        /**
         * Delete a user
         * @param int $id
         * @return boolean
         */
        public function delete($id) {
            
             $stmt = Database::conn()->prepare("DELETE FROM users WHERE id=:id");
             $stmt->bindparam(":id",$id);
             $stmt->execute();
             return true;
             
        }
                        
    }

