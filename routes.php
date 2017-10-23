<?php

$path = './components/';
require_once($path.'header/header.php');

if(isset($_POST['login'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  $sql = "SELECT id FROM user WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($db, $sql);
  if(mysqli_num_rows($result) == 1) {
    $_SESSION['logged_user'] = $username;
  } else {
    $alert = printAlert("Login failed.", true);
    echo $alert;
    require_once($path.'login-form/login-form.php');
    die();
  }
}

if(isset($_POST['register'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $password_again = mysqli_real_escape_string($db, $_POST['password_again']);
  $email = mysqli_real_escape_string($db, $_POST['email']);

  if($password != $password_again) {
    echo printAlert("Passwords didn't match!", true);
    require_once($path.'login-form/login-form.php');
    die();
  } else {
    $sql = "SELECT id FROM user WHERE username = '$username'";
    $result = mysqli_query($db, $sql);
    if(mysqli_num_rows($result) > 0) {
      echo printAlert("Username has already been taken!", true);
      require_once($path.'login-form/login-form.php');
    } else {
      $sql = "INSERT INTO user(username, email, password) VALUES('$username','$email','$password')";
      $result = mysqli_query($db, $sql);
      if(!$result) {
        echo printAlert("User creation failed!", true);
        require_once($path.'login-form/login-form.php');
      } else {
        echo printAlert("User succesfully created!", false);
        require_once($path.'login-form/login-form.php');
      }
    }
  }
}

if(isset($_SESSION['logged_id']) && !empty($_SESSION['logged_id'])) {
  //TODO päivitetään käyttäjän dashboard
} else {

}


require_once($path.'login-form/login-form.php');

?>
