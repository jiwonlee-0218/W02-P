<?php
$link = mysqli_connect('localhost','root','rootroot','dbp');
$query = "select * from movie";
$result = mysqli_query($link, $query);
$list = '';
while ($row = mysqli_fetch_array($result)){
  $list = $list."<li><a href = \"index.php?id={$row['id']}\">{$row['title']}</a></li>";
}

$article = array(
  'title' => 'Welcome',
  'description' => 'This is the movie introduction page.'
);



if(isset($_GET['id'])){
  $query = "select * from movie where id={$_GET['id']}";
  $result = mysqli_query($link,$query);
  $row = mysqli_fetch_array($result);
  $article = array(
    'title' => $row['title'],
    'description' => $row['description']
  );
}
?>



 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> Cinema </title>
</head>
<body>
  <h1><a href = "index.php"> MOVIE</a></h1>
  <ol>
  <?=$list ?>
  </ol>
  <form action="process_create.php" method="post">
    <p><input type="text" name="title" placeholder="title"></p>
    <p><textarea name="description" placeholder="description"></textarea></p>
    <p><input type="date" name=date></p>
    <p><input type="submit"></p>
  </form>
</body>
</html>
