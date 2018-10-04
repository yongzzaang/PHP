<?php
// $mysqli = mysqli_connect("example.com", "user", "password", "database");
// $res = mysqli_query($mysqli, "SELECT 'Please, do not use ' AS _msg FROM DUAL");
// $row = mysqli_fetch_assoc($res);
// echo $row['_msg'];

$conn = mysqli_connect(
  '13.124.217.147',
  'root',
  'hongik998103',
  'opentutorials');
$sql = "
  INSERT INTO topic
    (title, description, created)
    VALUES(
        'my sql',
        'my sql is',
        NOW()
    )
";
$result = mysqli_query($conn, $sql);
?>
