<?php
class Tasklist {
  public $id;
  public $title;
  public $author;
  public $created;
  public $tasks;
  private $db;

  public function __construct($id, $title, $created, $db) {
    $this->id = $id;
    $this->title = $title;
    $this->created = $created;
    $this->db = $db;
    $this->tasks = array();
  }

  public function getTasks() {
    require_once('./components/tasks/tasks.class.php');
    $sql = "SELECT * FROM tasks WHERE tasklist='$this->id'";
    $result = mysqli_query($this->db, $sql);

    if(!$result) {
      # TODO tyhjä tasklisti
    } else {
      while($row = mysqli_fetch_assoc($result)) {
        $task = new Task(
          (!empty($row['id'])           ? $row['id']          : null),
          (!empty($row['title'])        ? $row['title']       : null),
          (!empty($row['description'])  ? $row['description'] : null),
          (!empty($row['created'])      ? $row['created']     : null),
          (!empty($row['active'])       ? $row['active']      : null),
          $this->db
        );

        $this->tasks[] = $task;
      }
    }
  }

  public function renderTasks() {
    ob_start(); ?>
    <div class="col-md-8 offset-md-2">
      <div class="tasklist-header">
        <h4><?=$this->title?></h4>
      </div>
      <div class="tacklist-body">
        <table class="table">
          <tbody>
            <?php foreach($this->tasks as $task) {
              $task->renderTask();
            } ?>
          </tbody>
        </table>
      </div>
    </div>
    <?php $html = ob_get_clean();
    echo $html;
  }
}



?>
