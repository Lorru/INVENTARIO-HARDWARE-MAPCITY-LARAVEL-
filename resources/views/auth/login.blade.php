<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <title>Inventario - Login</title>
  @include('links.css')
</head>
<body class="hold-transition login-page">

  <div class="login-box">
  
    <div class="login-logo">
      <a href="/"><b>Inventario</b>Soporte</a>
    </div>
  
    <div class="login-box-body">
  
      <p class="login-box-msg">Ingresar al sistema de Inventario</p>
  
      <form action="/" method="post">
  
        <div class="form-group has-feedback">
          <input type="email" class="form-control" placeholder="Email">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
  
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
  
        <div class="row">
          <div class="col-xs-12">
            <input type="submit" value="Ingresar" class="btn btn-primary btn-block btn-flat">
          </div>
        </div>
  
      </form>
  
    </div>
  
  </div>
  @include('links.js')
</body>
</html>
