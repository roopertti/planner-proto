<style>
  .header-background {
    text-align: center;
    background-color: #ccc;
    padding: 40px 0 20px;
    margin-bottom: 30px;
  }

  .logout-btn-container {
    text-align: right;
  }

  .logout-btn-container a {
    margin-right: 30px;
  }

  .planner-header {
    color: white;
  }
</style>
<div class="header-background container-fluid">
  <h1 class="planner-header">Planner</h1>
  <div class="logout-btn-container">
    <?php if(isset($_SESSION['logged_user']) && !empty($_SESSION['logged_user'])) { ?>
      <a href="./?action=logout" class="btn btn-primary btn-sm">Logout</a>
    <?php } ?>
  </div>
</div>
