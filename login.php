<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> 
  <title>Login</title>
</head>
<body>
<div class="container">
  </div>
<br><br><br><br>
  <div class="col-md-4 col-md-offset-4">
  <a href="index.php">Home</a>
  <h2>Movie Hunt</h2>
  <?php if (isset($_SESSION['currentUser'])) {
    echo "Logged in as ".$_SESSION['currentUser']."<br><br>";
    echo "<a href='index.php'>Home Page</a><br><br>";
  }?>
  <?php
    function loadForm($email = "", $pass = "") { ?>
      <span>Please consider logging in</span>
      
        <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
          <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" placeholder="Enter email address" id="email" type="text" name="email" value="<?php echo $email ?>" required>
          </div>
          <div class="form-group">
            <label for="pass">Password</label>
            <input class="form-control" placeholder="Enter password" id="pass" type="password" name="pass" value="<?php echo $pass ?>" required> 
          </div>
          <input type="submit" name="form" value="Login" class="btn btn-primary">
          <p>Don't have an account?<a href="signup.php" class="btn">Sign up</a></p>
        </form>
      <?php
    }

    if (isset($_POST["form"])) {
      $conn = new mysqli('localhost', 'root', '', 'emotions');
      $email = htmlentities($_POST["email"]);
      $pass = htmlentities($_POST["pass"]);
      $hashed = md5($pass);
      $sql = "select * from users where email = '".$email."'";
      if ($result = $conn->query($sql)) {
        $rowCount = $result->num_rows;
        if ($rowCount > 0) {
          while ($row = $result->fetch_assoc()) {
            if ($row["email"] == $email && $row["pass"] === trim($hashed)) {
              echo true;  
              $_SESSION['currentUser'] = $row['uname'];
              $page = $_SERVER['PHP_SELF'];
              echo '<meta http-equiv="Refresh" content="0;' . $page . '">';
              exit();
            } else {
              ?><div class="alert alert-danger">Failed to login</div><?php
              loadForm($email, $pass);
            }
          }
        } else { echo $rowCount; echo $email; echo $hashed; ?>
        
          <br><div class="alert alert secondary">This user is not registered. Would you like to sign up?</div><br>
          <a href="signup.php"><input type="button" value="Sign up" class="btn btn-primary"></a><?php
        }
      }
    } else {
        loadForm();
    } ?>
    </div>
</body>
</html>