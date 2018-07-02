<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>
<body class="text-center" style="background-image: url('<?=base_url("assets/images/bg.jpg")?>'); background-repeat:no-repeat; background-position: left top; background-attachment: fixed; background-position: center; background-size: cover; color: #000;">
  <center>
  <div class="container">
  <div class="col-8 col-sm-8 col-md-9 col-lg-4">
  <div class="card" style="margin-top: 150px; background-color: rgba(255, 255, 255, 0.5);">
  <div class="card-body" >
    <blockquote class="blockquote mb-0">
      <form class="form-signin">
      <h1 class="h3 mb-3 font-weight-normal" >Please sign in</h1>
        <input  type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox mb-3" style="text-align: left;">
          <label >
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </div>
    </form>
    </blockquote>
  </div>
</div>

  
    
    
  </center>
    
  </div>
  </body>

</body>
  </html>