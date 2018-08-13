<?php session_start(); ?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
	<title>Quiz</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 5px 9px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 20%;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: 20%;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    margin: auto;
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;

    
    
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    margin: auto;
    padding: 16px;
    width: 40%;
    height: auto;
}

span.psw {
    float: right;
    padding-top: 16px;
    
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 16px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
    
}
.header{
    width:40%;
    height: 200px;
    margin: auto;
    
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 100%) {
    span.psw {
       display: block;
       float: none;
       
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
<?php
//include 'connection.php';
$conn = @new mysqli("localhost", "root", "");
if (!$conn) {
    $errors[] = "Unable to connect to database".$conn->connect_errno;
} 
$emotions = file('emotions.csv');
//if ($conn->query('drop database emotions')) {}

$sql = 'create database if not exists emotions';
if ($conn->query($sql)) {}
  //echo 'Database created successfully';
else 
  echo 'Error creating database: ' . $conn->error;



$conn->query('use emotions');
// Create username table
$sql ="create table if not exists users (
    `id` int(11) PRIMARY KEY AUTO_INCREMENT,
    `uname` varchar(60),
    `email` varchar(60),
    `pass` varchar(60)
)";

$conn->query($sql);

//Create recommendation table
$sql ="create table if not exists recommendation (
    `id` int(11) PRIMARY KEY AUTO_INCREMENT,
    `user_id` int(11),
    `movie_name` varchar(255),
    FOREIGN KEY fk_user(user_id) REFERENCES users(id) 
)";
$conn->query($sql);
foreach ($emotions as $emotion) {
    $line = explode(',', $emotion);
    $id = explode(' ', $line[0]);

    $sql = "create table if not exists `".$id[0]."` (
      `id` int(2),
      `emotion_id` varchar(40),
      PRIMARY KEY (`id`)
    )";
    $conn->query($sql);

    //$sql = 'insert into `'.$id[0].'` (id, emotion_id) values ("'.$id[1].'","'.$line[1].'")';
    if ($conn->query($sql)) {}
    //echo 'Database created successfully';
    else 
    echo 'Error creating database: ' . $conn->error;
  }

  $emotionQuestions = [];
  for ($i = 0; $i < 8; $i++) {
    $questions = [];
    
    $sql = 'select * from `'.($i + 1).'`'; 
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $questions[] = $row['emotion_id'];
      }
    }
    $emotionQuestions[$i] = $questions[rand(0, ($result->num_rows - 1))];
  }




?>

<div class="header" id="myHeader">
<a href="#top"> <img src="logo.jpg" alt="Company logo" style="width:100%;height:150px; margin:auto;"></a>
  <div class="header-right">

    
    <!-- <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button> -->
    <!-- <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Signup</button> -->
  </div>
</div>




<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal2 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}

</script>
<br>
<br>
<div class="container well">
<a href="login.php">Login</a><br>
<a href="signup.php">Sign up</a>
<h5>Logged in as <?php echo (isset($_SESSION['currentUser'])) ? $_SESSION['currentUser'] : 'Anonymous'; ?></h5>
<br>
<button class="accordion">Take Quiz</button>
<div class="panel">
<form action="result.php" method="POST">
  <?php

  for ($i = 0; $i < count($emotionQuestions); $i++) {
        ?>
            <h7><?php echo  $emotionQuestions[$i]; ?></h7> 

                <input type="hidden" name="emo[]" value="<?php echo  $emotionQuestions[$i]; ?>">

                    <div data-role="main" class="ui-content">

                        <input type="range" name="points[]" id="points" value="0" min="-50" max="50" data-show-value="true">
                
                    </div>
        <?php
            }
        ?>
    <input type="submit" value="Submit">
</form>

</div>

<button class="accordion">How It Works</button>
<div class="panel">
  <p>Random Word Generator
Supposedly there are over one million words in the English Language. We trimmed some fat to take away really odd words and determiners. Then we grabbed the most popular words and built this word randomizer. Just keep clicking generate—chances are you won't find a repeat!
Other parts of speech</p>
</div>
<button class="accordion">About</button>
<div class="panel">
    <h3><u>About</u></h3>
    <h5><u>The Movies</u></h5>
    <p>Our sugestions are taken from a database of over 700 movies that are curated 
    into categories specifically designed to improve the effectiveness of our search-algorythm</p>

    
    <h5><u>The questions</u></h5>
    <p>Our questions are designed to allow users to input responses as quickly as possible, 
    thereby putting as little presure as possible onto them. This ensures that 
    our system provides a painless and quick way for users to search through hundereds of 
    movies in seconds</p>

    
    <h5><u>The Algorythm</u></h5>
    <p>To ensure that only the most accurate suggestions are given to our users, we encorporated a
    combination of maths and psychology. </p>

    <h5><u>The Team</u></h5>
    <p> Ruan du Plessis - 212093541 </br>
    Gareth Bock - 21604635</br>
    Robyn Vice - 216219698</p>
</div>

</div>
<script>
    
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>

<script>

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
            panel.style.display = "none";
        } else {
            panel.style.display = "block";
        }
    });
}

</script>

<script>
  var slider = document.getElementById("myRange");
  var output = document.getElementById("demo");
  output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
    slider.oninput = function() {
    output.innerHTML = this.value;
}
</script>


</body>
   