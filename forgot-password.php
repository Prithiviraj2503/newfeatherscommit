<!doctype html>
<html lang="en" dir="ltr">
<?php include "include/common/accounthead.php"?>
<body class="font-muli theme-cyan gradient">

<div class="auth option2">
    <div class="auth_left">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <a class="header-brand" href=""><i class="fa fa-graduation-cap brand-logo"></i></a>
                    <div class="card-title">Forgot password</div>
                </div>
                <p class="text-muted">Enter your email address and your password will be reset and emailed to you.</p>
                <div class="form-group">
                    <label class="form-label" for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block">Send me new password</button>
                    <div class="text-muted mt-4">Forget it, <a href="index.php">Send me Back</a> to the Sign in screen.</div>
                </div>
            </div>
        </div>        
    </div>
</div>

<?php include "include/common/accountfooter.php"?>
</body>
</html>