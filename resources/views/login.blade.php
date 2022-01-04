<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    body {
        background-color:#FF5C00;
    }
    #login .container #login-row #login-column .login-box {
        margin-top: 120px;
        max-width: 600px;
        height: 320px;
        border: 1px solid #FBC095;
        background-color:#FBC095;
    }
    #login .container #login-row #login-column .login-box #login-form {
        padding: 20px;
    }
    #login .container #login-row #login-column .login-box #login-form #register-link {
        margin-top: -85px;
    }


</style>

<body>
	<div id="login">
    <h3 class="text-center text-white pt-5">Login form</h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center" style="">
            <div id="login-column" class="col-md-6">
                <div class="login-box col-md-12">
                    <form id="login-form" class="form" action="{{route('login')}}" method="post">
                        @csrf
                        <h3 class="text-center">Login</h3>
                        <div class="form-group">
                            <label for="email" style="color: black">Email:</label><br>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label  for="password" style="color: black">Password:</label><br>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="remember-me" class="text-info"><span style="color: black">Remember me</span> <span><input id="remember-me" name="remember" type="checkbox"></span></label><br>
                            <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                        </div>
                        <div id="register-link" class="text-right">
                            <a href="/register" style="color: black">Register here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
