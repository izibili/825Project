<!DOCTYPE html>
<html>
    <head>
        <title>Agency Project</title>
        <link rel="stylesheet" type="text/css" href="main.css">
        <link href="bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="bootstrap.min.js"></script>
        <script src="jquery-1.11.1.min.js"></script>

    </head>
    <body>
        <div class="container" >
            <div class="row">
                <div class="col-md-12">
                    <div class="pr-wrap">
                        <div class="pass-reset">
                            <label>
                                Enter the email you signed up with</label>
                            <input type="email" placeholder="Email" />
                            <input type="submit" value="Submit" class="pass-reset-submit btn btn-success btn-sm" />
                        </div>
                    </div>
                    <div class="wrap">
                        <p class="form-title">
                            Sign In</p>
                        <form class="login" method="post" action="insert.php" target="_blank">
                            <input type="text" placeholder="Email" name="email"/>
                            <input type="password" placeholder="Password" name="password"/>
                            <input type="submit" value="Sign In" class="btn btn-success btn-sm" />
                            <div class="remember-forgot">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" />
                                                Remember Me
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 forgot-pass-content">
                                        <a href="javascription:void(0)" class="forgot-pass">Forgot Password</a>
                                    </div>
                                    <div class="col-md-6 forgot-pass-content">
                                        <a href="./signup" class="forgot-pass">Sign up here</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="posted-by">Name of Course: <a href="http://www.emporia.edu">IS824XA Database Management</a>
            <a href="http://www.emporia.edu">By Godwin Izibili</a>
            </div>
        </div>            
    </body>
</html>