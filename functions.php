<?php

function printAlert($msg, $danger) {
  $type = ($danger ? 'danger' : 'success');
  ob_start(); ?>
  <div class="container">
    <div class="alert alert-<?=$type?>">
      <?=$msg?>
    </div>
  </div>
  <?php $html = ob_get_clean();
  return $html;
}

?>
