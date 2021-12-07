<style>
    /*-- Signup form CSS --*/
    form.Signup {
        border: 1px solid #ddd;
        padding: 0px 20px;
        margin: 50px 0px;
    }
    .Signup a {
        color: blue;
    }
    .Signup .btn {
        width: 100%;
        margin: 10px 0px;
        font-size: 18px;
        background-color: blue;
        border: none;
    }
    label.term-policy {
        font-weight: 500;
        margin: 10px 0px 0px;
    }
    .Signup .choose-icon {
        float: right;
        margin-top: -38px;
        background-color: #f5f5f5;
        padding: 7px 15px;
        height: 38px;
        border-bottom-right-radius: 4px;
        border-top-right-radius: 4px;
        border: 1px solid #ccc;
        position: relative;
        z-index: 999;
    }
    .Signup #Profile-pic {
        padding-left: 3px;
        padding-top: 3px;
    }
    .Signup h3 {
        margin: 20px 0px 30px;
        padding: 0px 0px 25px;
        text-align: center;
        border-bottom: 1px solid #ddd;
        color: black ;
    }
    p.not-yet {
        text-align: center;
    }
    </style>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register your account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #FBC095;">
  <div class="container">   
    <div class="row">
      <div class="col-md-6 offset-md-3" >
        <!-- Sign Up form -->
        <form style="background-color: #FF5C00;" action="" class="Signup">
          <h3>Register Now!!!</h3>
          <div class="form-group">
              <label for="name">Full Name</label>
            <input type="text" class="form-control" placeholder="Full Name" name="name" required>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
            <input type="text" class="form-control" placeholder="Enter Email" name="email" required>
          </div>
          <div class="form-group">
            <label for="Phone">Phone Number</label>
          <input type="tel" class="form-control" placeholder="0812-3456-7891" name="phone" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" required>
        </div>  
          <div class="form-group">
              <label for="psw">Password</label>
            <input type="password" class="form-control" placeholder="Enter Password" name="psw" required> 
          </div>   
          <div class="form-group">
            <label for="psw-repeat">Repeat Password</label>
            <input type="password" class="form-control" placeholder="Repeat Password" name="psw-repeat" required>
          </div>
          <div class="form-group">
            <label class="term-policy"><input type="checkbox"> By creating an account you agree to our <a href="#">Terms & Privacy</a>.</label>
          </div>
          <button type="submit" class="btn btn-success">Signup</button>
          <label><input type="checkbox" checked="checked" name="remember"> Remember me</label>
          <hr>
          <div class="form-group">
            <p class="not-yet">Already have an account? <a href="#">Login</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>