

<?php

// Show all information, defaults to INFO_ALL
  $db = 'poly';
  $link = mysqli_connect('localhost', 'root', 'nextlimit123');
  mysqli_select_db($link, $db) or die(mysqli_error());

  mysqli_set_charset($link, 'utf8');

  $password = md5('nextlimit123');

  $sql = mysqli_query($link,"INSERT INTO users(email, name, username, password) VALUES ('aocsa.cs@gmail.com', 'Alexander', 'aocsa', '".$password."') ") or die(mysqli_error($link));


  if (!$link) {
      die('Could not connect:' . mysql_error());
  }
  echo 'Connected successfully';

  $sql = mysqli_query($link,'SELECT * FROM users WHERE id="'.'1'.'"');
  $res = mysqli_fetch_assoc($sql);

  echo json_encode($res, JSON_PRETTY_PRINT);



?>
