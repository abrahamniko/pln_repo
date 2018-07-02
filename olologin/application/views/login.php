<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= $title ?></title>
    
</head>
<body class="text-center" style="background-image: url('<?=base_url("assets/images/bg.jpg")?>'); background-repeat:no-repeat; background-position: left top; background-attachment: fixed; background-position: center; background-size: cover; color: #000;">
  <div class="wrapper fadeInDown">
    <div id="formContent"> <br><br>

      <!-- Icon -->
      <div class="fadeIn first">
        <img src="<?=base_url("assets/images/pln.png")?>" id="icon" alt="User Icon" style="width: 20%;"/>
      </div> <br>
              <?php echo form_open('login/var_login');  ?>
                <!-- Login Form -->
              <form>
                <input type="text" id="login" class="fadeIn second" name="username" placeholder="Username" required>
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password" required> <br><br>
                <input type="submit" class="fadeIn fourth" value="Log In">
              </form>
              <?php echo form_close();?>
            <?php if(isset($pesan)){
              echo $pesan;} ?>
          </div>  
        </div>
      </div>
    </div>    
  </center>  
</body>
</html>