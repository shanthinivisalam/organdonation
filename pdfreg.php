<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2><centre>DONAR CARD GENERATION</centre></h2>
  <form action="donar.php" method="post">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="phno">Phone number:</label>
      <input type="phno" class="form-control" id="phno" placeholder="Enter phonenumber" name="phno">
    </div>
    <div class="form-group">
      <label for="bloodgrp">Blood Group:</label>
      <input type="bloodgrp" class="form-control" id="bloodgrp" placeholder="Enter bloodgroup" name="bloodgrp">
    </div>
    <div class="form-group">
      <label for="emerno">emergency contact:</label>
      <input type="emerno" class="form-control" id="emerno" placeholder="Enter emergency contact" name="emernos">
    </div>
    <div class="form-group">
    <label for="organs">organs wish to donate</label>
    <textarea class="form-control" id="organs" name="organs" rows="3"></textarea>
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
