<?php
$title = 'Success';
require_once 'includes/header.php';
require_once 'db/conn.php';


if(isset($_POST['submit'])){
    //extract values from the $_POST array
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dateofbirth'];
    $specialty = $_POST['specialty'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    // Call function to insert and track if success or not
    $isSuccess = $crud->insert($fname, $lname, $dob, $email, $contact, $specialty);

    if($isSuccess){
        echo '<class="text-center text=success"> YOU HAVE BEEN REGISTERED!</h1>';
    }
    else{
        echo '<class="text-center text-success">THERE WAS AN ERROR IN PROCESSING</h1>';
    }

}
?>

<h1 class="text-center">YOU HAVE BEEN REGISTERED</h1>

<div class="card" style="width: 18rem;">
<div class="card-body">

</p>
  <a href="#" class="btn btn-primary">Go Somewhere</a>






