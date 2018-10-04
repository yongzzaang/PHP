<?php
$conn = mysqli_connect(
  '13.124.217.147',
  'root',
  'hongik998103',
  'opentutorials');

$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
$list = '';
while($row = mysqli_fetch_array($result)){
  $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
}

$article = array(
  'title'=>'welcome',
  'description'=>'Hello, world'
);
if(isset($_GET['id'])){
  $sql = "SELECT * FROM topic WHERE id={$_GET['id']}";
  $result = mysqli_query($conn,$sql);
  $row = mysqli_fetch_array($result);
  $article = array(
    'title'=>$row['title'],
    'description'=>$row['description']
  );
}
?>
<!DOCTYPE html>
<!-- ssh -i "aws_password.pem" ubuntu@ec2-13-124-217-147.ap-northeast-2.compute.amazonaws.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>WEB</title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
      <?=$list?>
    </ol>
    <form class="" action="process_create.php" method="post">
      <p><input type="text" name="title" placeholder="title"></p>
      <p><textarea name="description" placeholder="description"></textarea></p>
      <p><input type="submit"></p>
    </form>

  </body>
</html>
