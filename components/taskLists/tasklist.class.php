<?php
class Tasklist {
  public $id;
  public $title;
  public $author;
  public $created;
  public $tasks;

  public function __construct($id, $title, $created) {
    $this->id = $id;
    $this->title = $title;
    $this->created = $created;
  }

}



?>
