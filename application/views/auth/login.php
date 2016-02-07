<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Right - Bootstrap Admin Template</title>
    <link rel="icon" type="image/png" href="img/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-favicon.png">
    <link href="/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
    <link href="/assets/libs/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/libs/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link href="/assets/css/right.css" rel="stylesheet">
    <link href="/assets/css/demo.css" rel="stylesheet"><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body class="solid_dark">
    <div class="wrapper">
      <div class="login">
      <?php echo form_open('auth/login', array('class' => 'login__form')) ?>
          <div class="login__logo"></div>
          <div class="form-group">
            <input type="text" name="email" placeholder="Email" class="form-control">
          </div>
          <div class="form-group">
            <input type="password" name="password" placeholder="Password" class="form-control">
          </div>
          <div class="form-group login__action">
            <div class="checkbox login__remember">
              <input id="chb1" type="checkbox">
              <label for="chb1">Remember</label>
            </div>
            <div class="login__submit">
              <button type="submit" class="btn btn-default">Sign in</button>
            </div>
          </div>
        <?php echo form_close() ?>
      </div>
    </div>
    <div class="demo">
      <div class="demo__ico"></div>
      <div class="demo__cont">
        <div class="demo__settings">
          <div class="demo__group">
            <div class="demo__label">Color theme:</div>
            <div class="demo__themes">
              <div data-theme="solid_dark" title="Dark" class="demo__theme demo__theme_active demo__theme_dark"></div>
              <div data-theme="transparent_lilac" title="Lilac" class="demo__theme demo__theme_lilac"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="/assets/libs/jquery/jquery.min.js"></script>
    <script src="/assets/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/js/demo.js"></script>
  </body>
</html>