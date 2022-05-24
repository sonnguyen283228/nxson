<?php
  if (isset($_POST['username'])) {
     $fname = $_POST['username'];
      print_r($fname);
  }
  if (isset($_POST['password'])) {
      $lname = $_POST['password'];
      print_r($lname);
  }



  // $fname = $_GET['fname'];
  // $lname = $_GET['lname'];
  // print_r($fname);
  // print_r($lname);





?>
<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms POST</h2>

<form action=""method="POST">
  <label for="username">User name:</label><br>
  <input type="text" id="username" name="username" value=""><br>
  <label for="password">Password:</label><br>
  <input type="text" id="password" name="password" value=""><br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>