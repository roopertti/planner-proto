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
