<?php
class crud {
    // private database object\
    private $db;

    //constructor to initialize private variable to the database connection
    function __construct($conn){
        $this->db = $conn;
    }
 
    //function to insert a new record into the attendee database
    public function insertAttendees($fname, $lname, $dob, $specialty, $email, $contact) {
        try {
            // define sql statement to be executed
            $sql = "INSERT INTO attendee VALUES (:fname, :lname, :dob, :specialty, :email, :contact)";
            // prepare the sql statement for execution
            $stmt = $this->db->prepare($sql);
            //bind all the placeholders to the actual values
            $stmt->bindParam(":fname", $fname);
            $stmt->bindParam(":lname", $lname);
            $stmt->bindParam(":dob", $dob);
            $stmt->bindParam(":specialty", $specialty);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":contact", $contact);


            // execute statement
            $stmt->execute();
            return true;


        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}


?>