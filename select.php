<?php
$conn = mysqli_connect(
  '13.124.217.147',
  'root',
  'hongik998103',
  'opentutorials');
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)){
  echo '<h2>'.$row['title'].'<h2>';
  echo '<h2>'.$row['description'].'<h2>';
};
 ?>
