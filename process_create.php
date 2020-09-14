<?php

$link = mysqli_connect('localhost','root','rootroot','dbp');
$query = "insert into movie
(title, description, created) values (
  '{$_POST['title']}',
  '{$_POST['description']}',
  '{$_POST['date']}'
  )
  ";

$result = mysqli_query($link, $query);
if($result == false){
  echo '저장하는 과정에서 문제가 발생했습니다';
  error_log(mysqli_error($link));
} else {
  echo '성공했습니다. <a href="index.php">돌아가기</a>';
}


?>
