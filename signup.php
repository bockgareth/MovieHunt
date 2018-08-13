<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  <title>Signup</title>
</head>
<body>
<div class="container">
  <h2>Movie Hunt</h2>
  <h4>Create a account</h4>
  </div>
<br><br><br><br>


  <div class="container">
    <?php
    function loadForm($uname = "", $email = "", $pass = "") { ?>
    <span>Please consider signing up</span>
    
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
      <div class="form-group">
        <label for="uname">Username</label>
        <input class="form-control" required id="first" type="text" name="uname" placeholder="Enter a username" value="<?php echo $uname ?>" required>
      </div>
      <div class="form-group">
        <label for="last">Email</label>
        <input class="form-control" required id="last" type="email" name="email" placeholder="Enter an email" value="<?php echo $email ?>" required>
      </div>
      <div class="form-group">
        <label for="email">Password</label>
        <input class="form-control" required id="email" type="password" name="pass" placeholder="Enter a password" value="<?php echo $pass ?>" required>
      </div>
      <input type="submit" name="form" required  value="Sign up" class="btn btn-primary"><br><br><br>
      <p>Have an account?<a href="login.php" class="btn">Login</a></p>
    </form>
  </div>
    <?php
    }
    if (isset($_POST["form"])) {
      $conn = new mysqli('localhost', 'root', '', 'emotions');
      $uname = htmlentities($_POST["uname"]);
      $email = htmlentities($_POST["email"]);
      $pass = md5($_POST["pass"]);
      $sql = "select * from users where uname = '".$uname."'";
      if ($result = $conn->query($sql)) {
        $rowCount = $result->num_rows;
        if ($rowCount > 0) {
          ?> <div class="alert alert-danger">This username has already been taken</div><?php
        
            loadForm($uname, $email, $pass);
        } else {
            $sql = "insert into users (uname, email, pass)
            values ('".$uname."', '".$email."', '".$pass."')";
            $conn->query($sql);
            ?> <div class="alert alert-success"><h3>User</h3><h2><?php echo $uname; ?></h2><h3> added with the email address</h3><h2> <?php echo $email; ?> &#9989; </h2><br> Thank you for signing up!</div>
            <a href="login.php" class="btn btn-primary">Login</a> <?php
        }
      }
    } else {
        loadForm();
    }
    ?>

</body>
</html>