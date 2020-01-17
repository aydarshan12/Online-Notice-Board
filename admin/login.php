<?php
	include('../connection.php');
	session_start();
	extract($_POST);
	if(isset($login))
	{
		$que=mysqli_query($conn,"select * from admin where user='$email' and pass='$pass'");
		$row=mysqli_num_rows($que);
		if($row)
			{	
				$_SESSION['admin']=$email;
				header('location:index.php');
			}
		else
			{
				$err="<font color='red'>Wrong Email or Password !</font>";
			}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin !</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  


</head>


<body>
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color: black;">
  <div class="container">
  
  <ul class="nav navbar-nav navbar-left">
    <li><a href="../index.php"><div class="intro">
  
<h3>Online Notice Board for Engineering Students</h3></div></a></li>
      
      
      <li><a href="../index.php?option=about"><span class="glyphicon glyphicon-user"></span> About</a></li>
   
   
    
    <li><a href="../index.php?option=contact"><span class="glyphicon glyphicon-phone"></span>Contact</a></li>

    <li><a href="login.php"><span class="glyphicon glyphicon-phone"></span>Admin</a></li>
    
    </ul>


<ul class="nav navbar-nav navbar-right">
      <li><a href="../index.php?option=New_user"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="../index.php?option=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
       <li><a href="../index.php?option=forget_pass"><span class="glyphicon glyphicon-frg-ps"></span> Forget password</a></li>
    </ul>



</div>
</nav>  



</div>
 <br><br><br><br><br><br><br><br>


<div class="container">
    <div class="row">
    <!-- container -->
        <div class="col-sm-8">
        <?php 
        @$opt=$_GET['option'];
        
        if($opt!="")
        {
            if($opt=="about")
            {
            include('../about.php');
            }
            else if($opt=="contact")
            {
            include('../contact.php');
            }
            
            else if($opt=="New_user")
            {
            include('../registration.php');
            }
            
            
            else if($opt=="login")
            {
            include('../login.php');
            }
            else if($opt=="forget_pass")
            {
            include('aa.php');
            }
        }
        else
        {
                    
                    
                    
        }
        ?>
        
        
        
        
        </div>
    <!-- container -->
        

        </div>
    </div>

</div>


    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" name="email"  type="email" autofocus required placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="pass" type="password" required>
                                </div>
                                
                                
								<div class="form-group">
                                    <input name="login" type="submit" value="Login" class="btn btn-lg btn-success btn-block">
                                </div>
								<div class="from-group">
								<a href="aaa.php">Forget Password</a>
								<div class="form-group">
                                    <label>
                                        <?php echo @$err;?>
                                    </label>
                                </div>
								
                                
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="../css/css/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../css/css/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../css/css/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../css/css/sb-admin-2.js"></script>

</body>

</html>
