<?php
  include 'connection.php';

  $emotions = file('emotions.csv');
  $conn->query('drop database emotions');

  $sql = 'create database if not exists emotions';
  if ($conn->query($sql)) {}
    //echo 'Database created successfully';
  else 
    echo 'Error creating database: ' . $conn->error;
  
  $conn->query('use emotions');

  foreach ($emotions as $emotion) {
    $line = explode(',', $emotion);
    $id = explode(' ', $line[0]);

    $sql = "create table if not exists `".$id[0]."` (
      `id` int(2),
      `emotion_id` varchar(40),
      PRIMARY KEY (`id`)
    )";
    $conn->query($sql);

    $sql = 'insert into `'.$id[0].'` (id, emotion_id) values ("'.$id[1].'","'.$line[1].'")';
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


  for ($i = 0; $i < count($emotionQuestions); $i++) {
    ?><h3>Question: <?php echo ($i + 1); ?></h3>
    <h4><?php echo $emotionQuestions[$i]; ?></h4><?php
  }

//$dropAssesmentTable = "DROP TABLE tbl_movie";

//$queryAssesment = $conn ->query($dropAssesmentTable);
//if($queryAssesment === False)
   // echo "<p> Unable to perform SQL Drop </p>";
   // else

  $createMovie = "CREATE TABLE tbl_movie (
  id int NOT NULL,
  actor varchar(200) NOT NULL,
  movie_title varchar(200) NOT NULL,
  genre varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
)" ;

$QResultCT = $conn->query($createMovie);
if ($QResultCT === FALSE)
      echo "<p> Unable to perform SQL createTable </p>";
else 
      // Insert movies data in Table
      $assData = file ("Movies.csv");
      foreach ($assData as $ind=> $sSTdata)
      {
   
       $assess = explode(",", $sSTdata);
       
       $sqlAddassessment = "INSERT into tbl_movie (id, actor, movie_title, genre)
        values ('".$assess[0]."', '".$assess[1]."', '".$assess[2]."', '".$assess[3]."')";
       
       echo $sqlAddassessment;

       $addValuesT = $conn->query($sqlAddassessment);
       if($addValuesT === FALSE)
        echo "<p> Tables add was unsuccessful: ".$conn->error." </p>";
       
     }
  
  


  
