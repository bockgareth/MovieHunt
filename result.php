<html>
<head>
<title>View your results</title>
</head>
<body>
 <?php
   session_start();
  //echo $_SESSION['currentUser'];
  $points = $_POST["points"];
  $emo = $_POST["emo"];
  $combo = array_combine($emo,$points);

  // print_r($combo);
  $value = max($combo);
  $word = array_search($value, $combo);
 // $key = array_search($word, $combo);
  $maxs = array_search($word, $emo);
  // echo "<p> your number: $value </p></ br>";
  // echo "<p> your word: $word</p></ br>";
  // echo "<p> your key: $maxs</p></ br>";

 
  switch($maxs){
    case 0:
    include("connection.php");
    //$DBConn = @new mysqli ("localhost", "root", "", "emotions");
    $SQLString = "SELECT * FROM tbl_movie WHERE genre = 'Animation' ORDER BY RAND() LIMIT 1";
    $QueryAn = $conn->query($SQLString);
    $SQLString2 = "SELECT * FROM tbl_movie WHERE genre = 'Comedy' ORDER BY RAND() LIMIT 1";
    $QueryCo = $conn->query($SQLString2);
    $SQLString3 = "SELECT * FROM tbl_movie WHERE genre = 'Romance' ORDER BY RAND() LIMIT 1";
    $QueryRo = $conn->query($SQLString3);
     ?>
     <!-- Your Movie suggestions are: -->
     <table align="center" border ="2" id="myTable">
     <thead>
     <tr>
     <th scope="col" onclick="sortTable(0)">Actor</th>
     <th scope="col" onclick="sortTable(1)">Movie</th>
     <th scope="col" onclick="sortTable(2)">Genre</th>
     </tr>
     </thead>
     <tbody>
     <tr>
     <?php
     while ($row = $QueryAn->fetch_assoc()) {
       ?>
      <td><?php echo $row["actor"];?></td>
      <td><a href="https://www.google.co.za/search?q=<?php echo $row['movie_title']?>" target="_blank"><?php echo $row["movie_title"]; populateRecommendation($row["movie_title"]); ?></a></td>
      <td><?php echo $row["genre"];?></td> 
      </tr>
<?php } 
      while ($rows = $QueryCo->fetch_assoc()) { 
        ?>
        <td><?php echo $rows["actor"];?></td>
                  <td><a href="https://www.google.co.za/search?q=<?php echo $rows['movie_title']?>" target="_blank"><?php echo $rows["movie_title"]; populateRecommendation($rows["movie_title"]); ?></a></td>
                  <td><?php echo $rows["genre"];?></td> 
    </tr>
    <?php  } 
        while ($rowss = $QueryRo->fetch_assoc()) {            
      ?>
                  <td><?php echo $rowss["actor"];?></td>
                  <td><a href="https://www.google.co.za/search?q=<?php echo $row['movie_title']?>" target="_blank"><?php echo $rowss["movie_title"]; populateRecommendation($rowss["movie_title"]); ?></a></td>
                  <td><?php echo $rowss["genre"];?></td> 
    </tr>
    <?php  } displayRecommendations();
    break;
    
    case 1:
    include("connection.php");
    //$DBConn = @new mysqli ("localhost", "root", "", "emotions");
    $SQLString = "SELECT * FROM tbl_movie WHERE genre = 'Animation'  ORDER BY RAND() LIMIT 1";
    $QueryAn = $conn->query($SQLString);
    $SQLString2 = "SELECT * FROM tbl_movie WHERE genre = 'Drama'  ORDER BY RAND() LIMIT 1";
    $QueryCo = $conn->query($SQLString2);
    $SQLString3 = "SELECT * FROM tbl_movie WHERE genre = 'Musical'  ORDER BY RAND() LIMIT 1";
    $QueryRo = $conn->query($SQLString3);
     ?>
     <!-- Your Movie suggestions are: -->
     <table align="center" border ="2" id="myTable">
     <thead>
     <tr>
     <th scope="col" onclick="sortTable(0)">Actor</th>
     <th scope="col" onclick="sortTable(1)">Movie</th>
     <th scope="col" onclick="sortTable(2)">Genre</th>
     </tr>
     </thead>
     <tbody>
     <tr>
     <?php
     while ($row = $QueryAn->fetch_assoc()) {
       ?>
      <td><?php echo $row["actor"];?></td>
      <td><a href="https://www.google.co.za/search?q=<?php echo $row['movie_title']?>" target="_blank"><?php echo $row["movie_title"]; populateRecommendation($row["movie_title"]); ?></a></td>
      <td><?php echo $row["genre"];?></td> 
      </tr>
<?php } 
      while ($rows = $QueryCo->fetch_assoc()) { 
        ?>
        <td><?php echo $rows["actor"];?></td>
                  <td><a href="https://www.google.co.za/search?q=<?php echo $rows['movie_title']?>" target="_blank"><?php echo $rows["movie_title"]; populateRecommendation($rows["movie_title"]); ?></a></td>
                  <td><?php echo $rows["genre"];?></td> 
    </tr>
    <?php  } 
        while ($rowss = $QueryRo->fetch_assoc()) {            
      ?>
                  <td><?php echo $rowss["actor"];?></td>
                  <td><a href="https://www.google.co.za/search?q=<?php echo $rowss['movie_title']?>" target="_blank"><?php echo $rowss["movie_title"]; populateRecommendation($rowss["movie_title"]);?></a></td>
                  <td><?php echo $rowss["genre"];?></td> 
    </tr>
    <?php  } displayRecommendations();
      break;
    
    case 2:
    
    include("connection.php");
    //$DBConn = @new mysqli ("localhost", "root", "", "emotions");
    $SQLString = "SELECT * FROM tbl_movie WHERE genre = 'Fantasy'  ORDER BY RAND() LIMIT 1";
    $QueryAn = $conn->query($SQLString);
    $SQLString2 = "SELECT * FROM tbl_movie WHERE genre = 'Musical'  ORDER BY RAND() LIMIT 1";
    $QueryCo = $conn->query($SQLString2);
    $SQLString3 = "SELECT * FROM tbl_movie WHERE genre = 'Action'  ORDER BY RAND() LIMIT 1";
    $QueryRo = $conn->query($SQLString3);
     ?>
     <!-- Your Movie suggestions are: -->
     <table align="center" border ="2" id="myTable">
     <thead>
     <tr>
     <th scope="col" onclick="sortTable(0)">Actor</th>
     <th scope="col" onclick="sortTable(1)">Movie</th>
     <th scope="col" onclick="sortTable(2)">Genre</th>
     </tr>
     </thead>
     <tbody>
     <tr>
     <?php
     while ($row = $QueryAn->fetch_assoc()) {
       ?>
      <td><?php echo $row["actor"];?></td>
      <td><a href="https://www.google.co.za/search?q=<?php echo $row['movie_title']?>" target="_blank"><?php echo $row["movie_title"]; populateRecommendation($row["movie_title"]); ?></a></td>
      <td><?php echo $row["genre"];?></td> 
      </tr>
<?php } 
      while ($rows = $QueryCo->fetch_assoc()) { 
        ?>
        <td><?php echo $rows["actor"];?></td>
                  <td><a href="https://www.google.co.za/search?q=<?php echo $rows['movie_title']?>" target="_blank"><?php echo $rows["movie_title"]; populateRecommendation($rows["movie_title"]); ?></a></td>
                  <td><?php echo $rows["genre"];?></td> 
    </tr>
    <?php  } 
        while ($rowss = $QueryRo->fetch_assoc()) {            
      ?>
                  <td><?php echo $rowss["actor"];?></td>
                  <td><a href="https://www.google.co.za/search?q=<?php echo $rowss['movie_title']?>" target="_blank"><?php echo $rowss["movie_title"]; populateRecommendation($rowss["movie_title"]); ?></a></td>
                  <td><?php echo $rowss["genre"];?></td> 
    </tr>
    <?php  } displayRecommendations();
      break;
    
    case 3:
    
    include("connection.php");
    //$DBConn = @new mysqli ("localhost", "root", "", "emotions");
    $SQLString = "SELECT * FROM tbl_movie WHERE genre = 'Comedy'  ORDER BY RAND() LIMIT 1";
    $QueryAn = $conn->query($SQLString);
    $SQLString2 = "SELECT * FROM tbl_movie WHERE genre = 'Horror'  ORDER BY RAND() LIMIT 1";
    $QueryCo = $conn->query($SQLString2);
    $SQLString3 = "SELECT * FROM tbl_movie WHERE genre = 'Sci-Fi'  ORDER BY RAND() LIMIT 1";
    $QueryRo = $conn->query($SQLString3);
    $SQLString4 = "SELECT * FROM tbl_movie WHERE genre = 'Thriller'  ORDER BY RAND() LIMIT 1";
    $QueryTh = $conn->query($SQLString4);
     ?>
     <!-- Your Movie suggestions are: -->
     <table align="center" border ="2" id="myTable">
     <thead>
     <tr>
     <th scope="col" onclick="sortTable(0)">Actor</th>
     <th scope="col" onclick="sortTable(1)">Movie</th>
     <th scope="col" onclick="sortTable(2)">Genre</th>
     </tr>
     </thead>
     <tbody>
     <tr>
     <?php
     while ($row = $QueryAn->fetch_assoc()) {
       ?>
      <td><?php echo $row["actor"];?></td>
      <td><a href="https://www.google.co.za/search?q=<?php echo $row['movie_title']?>" target="_blank"><?php echo $row["movie_title"]; populateRecommendation($row["movie_title"]); ?></a></td>
      <td><?php echo $row["genre"];?></td> 
      </tr>
<?php } 
      while ($rows = $QueryCo->fetch_assoc()) { 
        ?>
        <td><?php echo $rows["actor"];?></td>
                  <td><a href="https://www.google.co.za/search?q=<?php echo $rows['movie_title']?>" target="_blank"><?php echo $rows["movie_title"]; populateRecommendation($rows["movie_title"]); ?></a></td>
                  <td><?php echo $rows["genre"];?></td> 
    </tr>
    <?php  } 
        while ($rowss = $QueryRo->fetch_assoc()) {            
      ?>
                  <td><?php echo $rowss["actor"];?></td>
                  <td><a href="https://www.google.co.za/search?q=<?php echo $rowss['movie_title']?>" target="_blank"><?php echo $rowss["movie_title"]; populateRecommendation($rowss["movie_title"]); ?></a></td>
                  <td><?php echo $rowss["genre"];?></td> 
    </tr>
    <?php  } 
            while ($rowsss = $QueryTh->fetch_assoc()) {            
              ?>
                          <td><?php echo $rowsss["actor"];?></td>
                          <td><a href="https://www.google.co.za/search?q=<?php echo $rowsss['movie_title']?>" target="_blank"><?php echo $rowsss["movie_title"]; populateRecommendation($rowsss["movie_title"]); ?></a></td>
                          <td><?php echo $rowsss["genre"];?></td> 
            </tr>
            <?php  } displayRecommendations();
      break;
    
    case 4:
    
    include("connection.php");
    //$DBConn = @new mysqli ("localhost", "root", "", "emotions");
    $SQLString = "SELECT * FROM tbl_movie WHERE genre = 'Action'  ORDER BY RAND() LIMIT 1";
    $QueryAn = $conn->query($SQLString);
    $SQLString2 = "SELECT * FROM tbl_movie WHERE genre = 'Horror'  ORDER BY RAND() LIMIT 1";
    $QueryCo = $conn->query($SQLString2);
    $SQLString3 = "SELECT * FROM tbl_movie WHERE genre = 'Thriller'  ORDER BY RAND() LIMIT 1";
    $QueryRo = $conn->query($SQLString3);
     ?>
     <!-- Your Movie suggestions are: -->
     <table align="center" border ="2" id="myTable">
     <thead>
     <tr>
     <th scope="col" onclick="sortTable(0)">Actor</th>
     <th scope="col" onclick="sortTable(1)">Movie</th>
     <th scope="col" onclick="sortTable(2)">Genre</th>
     </tr>
     </thead>
     <tbody>
     <tr>
     <?php
     while ($row = $QueryAn->fetch_assoc()) {
       ?>
      <td><?php echo $row["actor"];?></td>
      <td><a href="https://www.google.co.za/search?q=<?php echo $row['movie_title']?>" target="_blank"><?php echo $row["movie_title"]; populateRecommendation($row["movie_title"]); ?></a></td>
      <td><?php echo $row["genre"];?></td> 
      </tr>
<?php } 
      while ($rows = $QueryCo->fetch_assoc()) { 
        ?>
        <td><?php echo $rows["actor"];?></td>
                  <td><a href="https://www.google.co.za/search?q=<?php echo $rows['movie_title']?>" target="_blank"><?php echo $rows["movie_title"]; populateRecommendation($rows["movie_title"]); ?></a></td>
                  <td><?php echo $rows["genre"];?></td> 
    </tr>
    <?php  } 
        while ($rowss = $QueryRo->fetch_assoc()) {            
      ?>
                  <td><?php echo $rowss["actor"];?></td>
                  <td><a href="https://www.google.co.za/search?q=<?php echo $rowss['movie_title']?>" target="_blank"><?php echo $rowss["movie_title"]; populateRecommendation($rowss["movie_title"]); ?></a></td>
                  <td><?php echo $rowss["genre"];?></td> 
    </tr>
    <?php  } displayRecommendations();
      break;
    
    case 5:
    
    include("connection.php");
    //$DBConn = @new mysqli ("localhost", "root", "", "emotions");
    $SQLString = "SELECT * FROM tbl_movie WHERE genre = 'Western' ORDER BY RAND() LIMIT 1";
    $QueryAn = $conn->query($SQLString);
    $SQLString2 = "SELECT * FROM tbl_movie WHERE genre = 'Sci-Fi' ORDER BY RAND() LIMIT 1";
    $QueryCo = $conn->query($SQLString2);
    $SQLString3 = "SELECT * FROM tbl_movie WHERE genre = 'Action' ORDER BY RAND() LIMIT 1";
    $QueryRo = $conn->query($SQLString3);
     ?>
     <!-- Your Movie suggestions are: -->
     <table align="center" border ="2" id="myTable">
     <thead>
     <tr>
     <th scope="col" onclick="sortTable(0)">Actor</th>
     <th scope="col" onclick="sortTable(1)">Movie</th>
     <th scope="col" onclick="sortTable(2)">Genre</th>
     </tr>
     </thead>
     <tbody>
     <tr>
     <?php
     while ($row = $QueryAn->fetch_assoc()) {
       ?>
      <td><?php echo $row["actor"];?></td>
      <td><a href="https://www.google.co.za/search?q=<?php echo $row['movie_title']?>" target="_blank"><?php echo $row["movie_title"]; populateRecommendation($row["movie_title"]); ?></a></td>
      <td><?php echo $row["genre"];?></td> 
      </tr>
<?php } 
      while ($rows = $QueryCo->fetch_assoc()) { 
        ?>
        <td><?php echo $rows["actor"];?></td>
                  <td><a href="https://www.google.co.za/search?q=<?php echo $rows['movie_title']?>" target="_blank"><?php echo $rows["movie_title"]; populateRecommendation($rows["movie_title"]);?></a></td>
                  <td><?php echo $rows["genre"]; ?></td> 
    </tr>
    <?php  } 
        while ($rowss = $QueryRo->fetch_assoc()) {            
      ?>
                  <td><?php echo $rowss["actor"];?></td>
                  <td><a href="https://www.google.co.za/search?q=<?php echo $rowss['movie_title']?>" target="_blank"><?php echo $rowss["movie_title"]; populateRecommendation($rowss["movie_title"]);?></a></td>
                  <td><?php echo $rowss["genre"];?></td> 
    </tr>
    <?php  } displayRecommendations();
      break;
    
    case 6:
    
    include("connection.php");
    //$DBConn = @new mysqli ("localhost", "root", "", "emotions");
    $SQLString = "SELECT * FROM tbl_movie WHERE genre = 'Western' ORDER BY RAND() LIMIT 1";
    $QueryAn = $conn->query($SQLString);
    $SQLString2 = "SELECT * FROM tbl_movie WHERE genre = 'Romance' ORDER BY RAND() LIMIT 1";
    $QueryCo = $conn->query($SQLString2);
    $SQLString3 = "SELECT * FROM tbl_movie WHERE genre = 'Fantasy' ORDER BY RAND() LIMIT 1";
    $QueryRo = $conn->query($SQLString3);
     ?>
     <!-- Your Movie suggestions are: -->
     <table align="center" border ="2" id="myTable">
     <thead>
     <tr>
     <th scope="col" onclick="sortTable(0)">Actor</th>
     <th scope="col" onclick="sortTable(1)">Movie</th>
     <th scope="col" onclick="sortTable(2)">Genre</th>
     </tr>
     </thead>
     <tbody>
     <tr>
     <?php
     while ($row = $QueryAn->fetch_assoc()) {
       ?>
      <td><?php echo $row["actor"];?></td>
      <td><a href="https://www.google.co.za/search?q=<?php echo $row['movie_title']?>" target="_blank"><?php echo $row["movie_title"]; populateRecommendation($row["movie_title"]); ?></a></td>
      <td><?php echo $row["genre"];?></td> 
      </tr>
<?php } 
      while ($rows = $QueryCo->fetch_assoc()) { 
        ?>
        <td><?php echo $rows["actor"];?></td>
                  <td><a href="https://www.google.co.za/search?q=<?php echo $rows['movie_title']?>" target="_blank"><?php echo $rows["movie_title"]; populateRecommendation($rows["movie_title"]); ?></a></td>
                  <td><?php echo $rows["genre"];?></td> 
    </tr>
    <?php  } 
        while ($rowss = $QueryRo->fetch_assoc()) {            
      ?>
                  <td><?php echo $rowss["actor"];?></td>
                  <td><a href="https://www.google.co.za/search?q=<?php echo $rowss['movie_title']?>" target="_blank"><?php echo $rowss["movie_title"]; populateRecommendation($rowss["movie_title"]); ?></a></td>
                  <td><?php echo $rowss["genre"];?></td> 
    </tr>
    <?php  } displayRecommendations();
      break;
    
    case 7:
    
    include("connection.php");
    //$DBConn = @new mysqli ("localhost", "root", "", "emotions");
    $SQLString = "SELECT * FROM tbl_movie WHERE genre = 'Romance' ORDER BY RAND() LIMIT 1";
    $QueryAn = $conn->query($SQLString);
    $SQLString2 = "SELECT * FROM tbl_movie WHERE genre = 'Drama' ORDER BY RAND() LIMIT 1";
    $QueryCo = $conn->query($SQLString2);
    $SQLString3 = "SELECT * FROM tbl_movie WHERE genre = 'Musical' ORDER BY RAND() LIMIT 1";
    $QueryRo = $conn->query($SQLString3);
     ?>
     <!-- Your Movie suggestions are: -->
     <table align="center" border ="2" id="myTable">
     <thead>
     <tr>
     <th scope="col" onclick="sortTable(0)">Actor</th>
     <th scope="col" onclick="sortTable(1)">Movie</th>
     <th scope="col" onclick="sortTable(2)">Genre</th>
     </tr>
     </thead>
     <tbody>
     <tr>
     <?php
     while ($row = $QueryAn->fetch_assoc()) {
       ?>
      <td><?php echo $row["actor"];?></td>
      <td><a href="https://www.google.co.za/search?q=<?php echo $row['movie_title']?>" target="_blank"><?php echo $row["movie_title"]; populateRecommendation($row["movie_title"]); ?></a></td>
      <td><?php echo $row["genre"];?></td> 
      </tr>
<?php } 
      while ($rows = $QueryCo->fetch_assoc()) { 
        ?>
        <td><?php echo $rows["actor"];?></td>
                  <td><a href="https://www.google.co.za/search?q=<?php echo $rows['movie_title']?>" target="_blank"><?php echo $rows["movie_title"]; populateRecommendation($rows["movie_title"]); ?></a></td>
                  <td><?php echo $rows["genre"];?></td> 
    </tr>
    <?php  } 
        while ($rowss = $QueryRo->fetch_assoc()) {            
      ?>
                  <td><?php echo $rowss["actor"];?></td>
                  <td><a href="https://www.google.co.za/search?q=<?php echo $rowss['movie_title']?>" target="_blank"><?php echo $rowss["movie_title"]; populateRecommendation($rowss["movie_title"]); ?></a></td>
                  <td><?php echo $rowss["genre"];?></td> 
    </tr>
    <?php  } displayRecommendations();
      break;
    
    default:
    
      echo "fuckkkkkkk";
    
  }

  function populateRecommendation($movieTitle) {
    include("connection.php");
    $user = $_SESSION['currentUser'];
    $sql = "SELECT * FROM `users` where uname = '".$user."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $user_id = $row['id'];
      }
    }
    
    $sql = "INSERT INTO recommendation (user_id, movie_name) VALUES ('".$user_id."', '".$movieTitle."')";
    $result = $conn->query($sql);

  }


  function displayRecommendations() {
    echo "<h4>History</h4>";
    echo "<h5>Your most recent recommendations:</h5>";
    include("connection.php");
    $user = $_SESSION['currentUser'];
    $sql = "SELECT * FROM `users` where uname = '".$user."'";
    $result = $conn->query($sql);
    $user_id;
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $user_id = $row['id'];
      }
    }
  
    $sql = "SELECT * FROM `recommendation` where user_id = '".$user_id."' ORDER BY id DESC LIMIT 8";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      echo "<ul>";
      while($row = $result->fetch_assoc()) {
        echo "<li><a href='https://www.google.co.za/search?q=". $row['movie_name']."' target='_blank'>".$row['movie_name']."</a></li>";
      }
      echo "</ul>";
  
    }
  }

?> 

<a href="<?php echo $_SERVER['HTTP_REFERER'] ?>">Back</a>
<h2>Your Recommendations</h2>
</body>
</html>