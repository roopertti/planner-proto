<?php
$taskLists = array(
  0 => array(
    "title" => "Random taskilista",
    "author" => "Robert Kuhlmann",
    "created" => "20.10.2017",
    "tasks" => array(
      0 => array(
        "timestamp" => "20.10.2017",
        "content" => "tee jotakki",
        "done" => false
      ),
      1 => array(
        "timestamp" => "20.10.2017",
        "content" => "tee jotakki muuta",
        "done" => false
      )
    )
  )
);

if($taskLists && count($taskLists) > 0) {
  ob_start();
  ?>
  <div class="container">
    <div class="row">
    <?php
    foreach($taskLists as $list) {
      ?>
      <div class="col-md-4">
        <div class="tasklist-header">
          <h4><?=$list['title']?></h4>
        </div>
        <div class="tacklist-body">
          <table class="table">
            <tbody>
              <?php
              foreach($list['tasks'] as $task) {
                echo '<tr>';
                $taskContent = '<td>' . $task['timestamp'] . '</td>';
                $taskContent .= '<td>' . $task['content'] . '</td>';
                if(!$task['done']) {
                  $taskContent .= '<td><button class="btn btn-primary"></button></td>';
                } else {
                  $taskContent .= "<td><button class='btn btn-success'><i class='fa fa-check' aria-hidden='true'></i></button></td>";
                }
                echo $taskContent;
                echo '</tr>';
              } ?>
            </tbody>
          </table>
        </div>
      </div>
      <?php
    } ?>
    </div>
  </div> <?php

  $html = ob_get_clean();
  echo $html;
} ?>
