<?php
  if (isset($_GET['fname'])) {
     $fname = $_GET['fname'];
      print_r($fname);
  }
  if (isset($_GET['lname'])) {
      $lname = $_GET['lname'];
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

<h2>HTML Forms GET</h2>

<form action=""method="GET">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value=""><br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>