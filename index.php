<!DOCTYPE html>
<html>
<body>

<form method="post" action="generate-pdf.php">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name"><br><br>
  <label for="check_mark">Check Mark:</label>
  <input type="radio" id="check_mark_name" name="check_mark" value="Name">
  <label for="check_mark_name">Name</label>
  <input type="radio" id="check_mark_later" name="check_mark" value="Later">
  <label for="check_mark_later">Later</label><br><br>
  <label for="drop_down">Drop Down:</label>
  <select id="drop_down" name="drop_down">
    <option value="Yes">Yes</option>
    <option value="No">No</option>
  </select><br><br>
  <input type="submit" value="Generate PDF">
</form> 

</body>
</html>
