<!-- reference: w3c school online store theme -->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Page</title>

  <?php include('include/dbConnector.php'); ?>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- A bootstrap validator plugin -->
  <!-- reference: https://github.com/1000hz/bootstrap-validator -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
  
  <!-- link your own css here -->
  <link rel="stylesheet" type="text/css" href="StyleSheet/index.css">
  <link rel="stylesheet" type="text/css" href="StyleSheet/mylogin3.css">
</head>
<body>
  <?php include('include/loginheader.php'); ?>

   <!--   Incorrect warning -->
    <?php if ($_SESSION['wrong']) {  ?>
    
    <div class="container header">
        <div class="alert alert-danger fade in">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <span class="glyphicon glyphicon-remove"></span> &nbsp;&nbsp; Email address and password combination is incorrect. 
        </div>
    </div>
    <?php } ?>
    
   
   
  <!-- Login section -->
<div class="container center">
  <div class="row">
    <form class="form-horizontal" action="login.php" method="post" data-toggle="validator" role="form">
    <!-- "Sign in" header -->
    <div class="form-group" id="signin">
      <label class="control-label" >Sign in</label>
    </div>

    <div class="form-group" >
      <div class="col-md-4">
        <label for="username" class="control-label" style="text-align: left;">Username or Email</label>
      </div>
      <div class="col-md-8">
        <input type="email" class="form-control" id="username" name="username"
    pattern=".*@\w{2,}\.\w{2,}"
    
    data-error="* Please enter valid email address" required>
        <div class="help-block with-errors" style="margin-bottom: 0px;font-size: small;"></div>
      </div>
    </div>

    <div class="form-group" >
      <div class="col-md-4">
        <label for="password" class="control-label" style="text-align: left;">Password</label>
      </div>
      <div class="col-md-8">
        <input type="password" class="form-control" name="inputPwd" id="password"  minlength="8" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d$@$!%?&]{8,}$" 
        data-error="* Minimum of 8 characters, including 1 upper case, 1 lower case and 1 number" required="Required">
        <div class="help-block with-errors" style="margin-bottom: -20px; font-size: small;"></div>
      </div>
    </div>
    
    <div class="form-group" id="forget">
      <label class="hidden-xs hidden-sm col-md-3 col-lg-2 control-label"></label>
      <label class="col-xs-12 col-sm-5  col-md-5  control-label" >
        <a href="#">forgot your password?</a>
      </label>
      <!-- <label class="col-sm-1 control-label"></label> -->
      <!-- Checkbox "Remember me" -->
      <label class="col-xs-12 col-sm-5 col-md-4 control-label" >
        <input type="checkbox" value="remember"> Remember me
      </label>
    </div>
    <!-- Submib button -->
    <div class="form-group">
      <button class="btn btn-primary btn-lg btn-success" name="login" type="submit" style="margin-left: 10px;">Sign in</button>
    </div>
  </form>
  </div>

</div>


<?php include('include/footer.php') ;?>

</body>
</html>
