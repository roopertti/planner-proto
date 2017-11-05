<?php
require_once('./components/taskLists/tasklist.class.php');

$tasklists = array();
$id = $_SESSION['logged_user_id'];
$sql = "SELECT id, title, created FROM tasklists WHERE author = '$id'";
$result = mysqli_query($db, $sql);

if(mysqli_num_rows($result) < 1) {
  //TODO ei oo taskilistoja
} else {
  while($row = mysqli_fetch_assoc($result)) {
    $tasklist = new Tasklist(
      (!empty($row['id'])       ? $row['id']      : null),
      (!empty($row['title'])    ? $row['title']   : null),
      (!empty($row['created'])  ? $row['created'] : null),
      $db
    );
    $tasklists[] = $tasklist;
  }

  foreach($tasklists as $tasklist) {
    $tasklist->getTasks();
    $tasklist->renderTasks();
  }
}



?>
