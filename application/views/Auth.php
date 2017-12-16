<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CAM - Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <!-- Bulma Version 0.6.0 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.0/css/bulma.min.css" integrity="sha256-HEtF7HLJZSC3Le1HcsWbz1hDYFPZCqDhZa9QsCgVUdw=" crossorigin="anonymous" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/login.css'); ?>">
  <link rel="icon" href="<?php echo base_url('assets/img/favicon.ico'); ?>">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.js" integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg=" crossorigin="anonymous"></script>
</head>
<body>
  <section class="hero is-success is-fullheight">
    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="column is-4 is-offset-4">
          <h3 class="title has-text-grey">Core Asset Management (CAM)</h3>
          <div class="box">
            <figure class="avatar">
              <img src="<?php echo base_url('assets/img/login-hamster-large.png'); ?>" width="128" height="128">
            </figure>
            <?php echo form_open('auth/login', array('autocomplete' => 'off', 'id' => 'login')); ?>
              <div class="field">
                <div class="control">
                	<label class="label">Username : </label>
                	<input class="input is-large" type="text" placeholder="Username" autofocus="yes" name="username">
                  <small class="has-text-danger"><?php echo form_error('username'); ?></small>
                </div>
              </div>

              <div class="field">
                <div class="control">
                	<label class="label">Password : </label>
                  <input class="input is-large" type="password" placeholder="Password" name="password">
                  <small  class="has-text-danger"><?php echo form_error('password'); ?></small>
                </div>
              </div>
             
              <a class="button is-block is-info is-large" onclick="$('#login').submit()">Login</a>
            </form>
          </div>
          <article class="message is-info">
            <div class="message-header">
              <p>Muhammad Irfan</p>
            </div>
            <div class="message-body">
              "Ketika ingin menciptakan sesuatu itu, harus memikirkan seribu langkah kedepan."

            </div>
          </article>
        </div>

        
        <?php if(isset($gagal)): ?>
        <div class="column has-text-danger">
          <?php echo $gagal; ?>
        </div>
        <?php endif; ?>

        <?php if(isset($_SESSION['pesan'])): ?>
        <div class="column has-text-info">
          <?php echo $_SESSION['pesan']; ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <script async type="text/javascript" src="<?php echo base_url('assets/js/bulma.js'); ?>"></script>
  <script type="text/javascript">
    $('.input').keypress(function (e) {
      if (e.which == 13) {
        $('#login').submit();
        return false;
      }
    });
  </script>
</body>
</html>