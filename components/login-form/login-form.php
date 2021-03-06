<div class="container">
  <div class="row">
    <div class="col-md-4 offset-md-4">
      <form action="./" method="post" id="loginForm">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="text" name="password" class="form-control">
        </div>
        <div class="form-group">
          <input type="submit" name="login" class="btn btn-primary">
        </div>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4 offset-md-4">
      <form action="./" method="post" id="registerForm" style="display: none;">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="text" name="password" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">Password again</label>
          <input type="text" name="password_again" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">Email</label>
          <input type="text" name="email" class="form-control">
        </div>
        <div class="form-group">
          <input type="submit" name="register" class="btn btn-primary">
        </div>
      </form>
      <div class="text-center">
        <a href="#" id="formToggleBtn">Register</a>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(function() {
    $(document).on('click', '#formToggleBtn', function() {
      $('#loginForm').animate({
        height: 'toggle'
      });
      $('#registerForm').animate({
        height: 'toggle'
      });
      $('#formToggleBtn').animate({
        height: 'toggle'
      });
    });
  });
</script>
