<?php
$title = 'Index';
require_once 'includes/header.php';
require_once 'db/conn.php';
?>
<!--
    - First name
    - Last name
    - Date of birth (Use Date Picker)
    - Specialty (Database Admin, Software Developer, Web Administrator)
    - Email address
    - Contact Number
-->
<h1 class="text-center" style="color: blue;"> Registration for IT Conference</h1>

<form method= "get" action = "success.php">
 <div class="container">   
<div class="form-group">
      <label for="firstname">First Name</label>
      <input type="text" class="form-control" id="fname" name="fname">
    </div><br>

    <div class="form-group">
      <label for="lastname">Last Name</label>
      <input type="text" class="form-control" id="lname" name="lname">
    </div><br>
    <div class="form-group">
      <label for="dateofbirth">Date of Birth</label>
      <input type="text" class="form-control" id="datepicker" name= "datepicker">
    </div><br>

  <div class="form-group">
      <label for="specialty">Specialty</label>
      <select class=" custom-select" id= "specialty" name= "specialty">
        <option> Database Admin</option>
        <option> Software Developer </option>
        <option> Web Administrator </option>
        <option> Other </option>
      </select>
  </div>
    <br>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="exampleInputEmail1">Email Address</label>
      <input required type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
      <small id="emailHelp" class="form-text text-muted"></small>
    </div><br>

  <div class="form-group col-md-6">
      <label for="contact">Contact Number</label>
      <input type="number" class="form-control" id="contact" name="contact">
  </div><br>

  <button type= "submit" class="btn btn-primary" type="submit">Submit form</button>
</form>



<?php require_once 'includes/footer.php';
