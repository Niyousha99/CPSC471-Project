<?php
    class Post{
        private $conn;
        private $table = 'posts';

        // Post properties (fields needed for post)
        public $id;
        
        
    

        // Constructor with DB
        public function __construct($db) {
            $this->conn = $db;
          }

        // Post operation 
        public function read() {
            // Create query
            $query = 

            // Prepare statement
            $stmt = $this->conn->prepare($query);
      
            // Execute query
            $stmt->execute();
      
            return $stmt;
          }

        // Single Post operation
        public function read_single() {
            // Create query
            $query =                                         

            // Prepare statement
            $stmt = $this->conn->prepare($query);

            // Bind ID
            $stmt->bindParam(1, $this->id);

            // Execute query
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            // Set properties
            $this->title = $row['title'];
            $this->body = $row['body'];
            $this->author = $row['author'];
            $this->category_id = $row['category_id'];
            $this->category_name = $row['category_name'];
        }

        // Create Post
        public function create() {
            // Create query
            $query = 

            // Prepare statement
            $stmt = $this->conn->prepare($query);

            // Clean data (for each field)
            // e.g.: $this->title = htmlspecialchars(strip_tags($this->title));

            // Bind data
            // e.g.:  $stmt->bindParam(':title', $this->title);
            $stmt->bindParam(':body', $this->body);
            $stmt->bindParam(':author', $this->author);
            $stmt->bindParam(':category_id', $this->category_id);

            // Execute query
            if($stmt->execute()) return true;
        
        // Print error if something goes wrong
        printf("Error: %s.\n", $stmt->error);
  
        return false;
      }

        // Update Post
        public function update() {
            // Create query
            $query = 
                  
                     

            // Prepare statement
            $stmt = $this->conn->prepare($query);

            // Clean data

            // Bind data

            // Execute query
            if($stmt->execute()) return true;
        

            // Print error if something goes wrong
            printf("Error: %s.\n", $stmt->error);

            return false;
        }

        // Delete Post
        public function delete() {
            // Create query
            $query = 

            // Prepare statement
            $stmt = $this->conn->prepare($query);

            // Clean data
            

            // Bind data
          

            // Execute query
            if($stmt->execute()) return true;
        

            // Print error if something goes wrong
            printf("Error: %s.\n", $stmt->error);

            return false;
        }

    }