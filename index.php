<?php

$tasks = "Tee jotain";

$tasks == NULL ? $tasks = "No current tasks" : $tasks;

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Perus HTML sivu</title>
  </head>
  <body>
    <div class="container">
      <h1>Dashboard</h1>
      <div>
        <?=$tasks?>
      </div>
    </div>
  </body>
</html>
