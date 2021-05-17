
<?php
date_default_timezone_set('Asia/Calcutta');
@session_start();

include("api/main.php");
$msg="";
/* Log In Start  */

if(isset($_POST['lusername'])) 
	{   
		$username  = $_POST['lusername'];
		$password  =  md5($_POST['lpassword']);
		if($_POST['lusername'] != '')
		{
			$qry     = "SELECT * FROM user WHERE user_name = '".$username."' AND user_password = '".$password."' and status=0";
			  //echo $qry;
			//  die;
			$res = mysqli_query($mysqli,$qry)or die("Error in Get All Records".mysqli_error()); 
			$result = mysqli_fetch_array($res);
		if ($mysqli->affected_rows>0)
			{  
				 $_SESSION['username']    = $result['user_name'];
				 $_SESSION['userid']          = $result['user_id'];
				 $_SESSION['usertel']         = $result['user_tel'];
				 $_SESSION['usermail']       = $result['user_mail'];
			

		 
		//The value of $ip at this point would look something like: "192.0.34.166"
		$ip = $_SERVER['REMOTE_ADDR']; 
		 
		 $date = date('Y-m-d h:i:s');
		 
	   	 $qry  = "INSERT INTO user_logs(ipaddress,login_date,fk_user_id)
		          VALUES('".$ip."','".$date."','".$_SESSION['userid']."')";
			 	// echo $qry;
//die;				 
		$res =$mysqli->query($qry)or die("Error in Query".$mysqli->error);
		$id = 0;
		$id = $mysqli->insert_id;
        $_SESSION['loginid'] = 	$id; ?>
        
       
          <script>location.href='<?php  echo $HOSTPATH; ?>dashboard';</script>  
     	
		<?php
		}
				
		else
		{ 
		$msg="Enter Valid Email Id and Password";
       } 
    }
}
	//echo $msg;
	// die;
		?>



<!doctype html>
<html lang="en" dir="ltr">
<?php include "include/common/accounthead.php"?>
<body class="font-muli theme-cyan gradient">

<div class="auth option2">
    <div class="auth_left">
        <div class="card">
            <div class="card-body">
            <?php
            if($msg != '')
            {
             echo $msg;
            }
             ?>
            <form class="login100-form validate-form" id="loginform" name="loginform" action="" method="post">
                <div class="text-center">
                    <a class="header-brand" href=""><i class="fa fa-graduation-cap brand-logo"></i></a>
                    <div class="card-title mt-3">Login to your account</div>
                  <!--  <button type="button" class="btn btn-facebook"><i class="fa fa-facebook mr-2"></i>Facebook</button>
                    <button type="button" class="btn btn-google"><i class="fa fa-google mr-2"></i>Google</button>
                    <h6 class="mt-3 mb-3">Or</h6>-->
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="lusername" id="lusername" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label class="form-label"><a href="forgot-password.php" class="float-right small">I forgot password</a></label>
                    <input type="password" class="form-control" name="lpassword" id="lpassword" placeholder="Password">
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" />
                    <span class="custom-control-label">Remember me</span>
                    </label>
                </div>
                <div class="text-center">
                <button type="submit" id="lbutton" name="lbutton" class="btn btn-primary btn-block" >
                Sign in		</button>
                
                    <div class="text-muted mt-4">Don't have account yet? <a href="register.php">Sign up</a></div>
                </div>
            </div>
          </form>
        </div>        
    </div>
</div>
<?php include "include/common/accountfooter.php"?>

</body>
</html>