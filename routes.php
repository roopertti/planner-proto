<?php

$path = './components/';

if(isset($_POST['login'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  $sql = "SELECT id FROM user WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($db, $sql);
  if(mysqli_num_rows($result) == 1) {
    $_SESSION['logged_user'] = $username;
  } else {
    require_once($path.'header/header.php');
    $alert = printAlert("Login failed.", true);
    echo $alert;
    require_once($path.'login-form/login-form.php');
  }
} else {
  require_once($path.'header/header.php');
  require_once($path.'login-form/login-form.php');
}

if(isset($_SESSION['logged_id']) && !empty($_SESSION['logged_id'])) {
  //TODO päivitetään käyttäjän dashboard
} else {

}


# require_once($path.'header/header.php');
# require_once($path.'taskLists/taskLists.php');

?>
