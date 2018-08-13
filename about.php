<html>
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
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
    width: 100%;
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
</head>
<body>
<div class="header" id="myHeader">
<img src="logo.jpg" alt="Company logo"style="width:150px;height:100px;">

  <p>


  </p>  
</div>
</br>
<div class="container well">
  <h1><u>About</u></h1>
  <h2>The Movies</h2>
  <p>Our sugestions are taken from a database of over 700 movies that are curated 
  into categories specifically designed to improve the effectiveness of our search-algorythm</p>

  <h2>The questions</h2>
  <p>Our questions are designed to allow users to input responses as quickly as possible, 
  thereby putting as little presure as possible onto them. This ensures that 
  our system provides a painless and quick way for users to search through hundereds of 
  movies in seconds</p>

  <h2>The Algorythm</h2>
  <p>To ensure that only the most accurate suggestions are given to our users, we encorporated a
  combination of maths and psychology. </p>
  
</div>

<div class="container well">

<div id="footer">
    <div class="container">
        <div class="row">
            <h4 class="footertext">About Us:</h4>
              <div class="col-md-4">
                <center>

                  <h5 class="footertext">Programmers:</h5>
                  <h6 class="footertext">Ruan du Plessis - 212093541</h6>
                  <h6 class="footertext">Gareth Bock - 21604635</h6>
                  <h6 class="footertext">Robyn Vice - 216219698</h6>
                </center>
              </div>
              <div class="col-md-4">
                <center>

                  <h5 class="footertext">Resources</h5>
                  <p class="footertext">Insert links to psych papers/articles.
                </center>
              </div>
              <div class="col-md-4">
                <center>

                  <h5 class="footertext">Course</h5>
                  <h6 class="footertext">Cape Peninsula University Of Technology</h6>
                  <h6 class="footertext">Applications Development</h6>
                  <h6 class="footertext">Project 3</h6>
                  <h6 class="footertext">Mr A Mukherjee</h6>
                </center>
              </div>
            </div>
            <div class="row">
           
        </div>
    </div>
</div>
</div>
</body>
</html>