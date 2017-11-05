<?php
class Task {
  private $id;
  public $title;
  public $description;
  public $created;
  private $tasklist;
  public $active;
  private $user;
  private $db;

  public function __construct($id, $title, $description, $created, $active, $db) {
    $this->id = $id;
    $this->title = $title;
    $this->description = $description;
    $this->created = $created;
    $this->active = $active;
    $this->db = $db;
  }

  public function renderTask() {
    $taskHTML = "<tr>";
    $taskHTML .= $this->tableCell($this->title, true);
    $taskHTML .= $this->tableCell($this->description, false);
    $button = "<button class='btn btn-";
    $button .= ($this->active == 0 ? "success'>Start" : "warning'>Stop");
    $button .= "</button>";
    $taskHTML .= $this->tableCell($button, false);
    $taskHTML .= "</tr>";
    echo $taskHTML;
  }

  private function tableCell($content, $strong) {
    if($strong)
      return "<td><strong>" . $content . "</strong></td>";
    else
      return "<td>" . $content . "</td>";
  }
}

/*echo '<tr>';
$taskContent = '<td>' . $task['timestamp'] . '</td>';
$taskContent .= '<td>' . $task['content'] . '</td>';
if(!$task['done']) {
  $taskContent .= '<td><button class="btn btn-primary"></button></td>';
} else {
  $taskContent .= "<td><button class='btn btn-success'><i class='fa fa-check' aria-hidden='true'></i></button></td>";
}
echo $taskContent;
echo '</tr>';*/



?>
