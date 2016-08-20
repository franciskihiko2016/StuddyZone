	   <?php
							 
							 if(isset($_POST["signup"])  )
							 {
							 echo "hi";
							     $user=$_POST['username'];
							     $email=$_POST['email'];
							     $phone=$_POST['phone'];
							     $country=$_POST['country'];
							     $address=$_POST['address'];
							     $pass=$_POST['password'];
							     $pass2=$_POST['password2'];
							     $writerid= md5($email);
								 echo $writerid;
							    if($pass !== $pass2)
								{
								   echo "password does not match";
								
								} else
								{
								
								  require('connection.php');
								   $pass3=$pass;
								   $sel=mysql_query("SELECT * FROM writers WHERE email='$email'");
								   $sel=mysql_query("SELECT * FROM customers WHERE email='$email'");
								   if(!$sel) 
								   { echo "failed";} else
								   { if(mysql_num_rows($sel) !==0){
								   echo "Choose another email or login";
								   
								   
								   }else{
								  
								   $qry = mysql_query("INSERT into writers (username,email,password,writerid,phone,country,billaddress) VALUES('$user','$email','$pass3','$writerid','$phone','$country','$address')");
								  echo $user;
								  echo $email;
									
								  if( !$qry)
								  {
								     echo "not inserted";
								  } else{
                                          $to=$email;
										  $subject="This is an email";
										  $body=" Your account has been created successfuly";
										  $headers='From:Studyzone.com';
										  
										  if(mail($to,$subject,$body,$header))
										  {
										   echo "inserted";
								  session_start();
                                     echo "kihiko";
                               $_SESSION['username']=$email;
                               $_SESSION['password']=$pass3;
                               $_SESSION['id']=$customerid;
								  header("location:writer_home.php");
										  
										  } else { echo " an error occured";}
								 
								}}
								}
								}
								
								
							 
							 }
							 
							 
							 
							 ?>


<!DOCTYPE HTML>
<html>
<header>
<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="stylesoft.css" rel="stylesheet" type="text/css" media="screen" />
<link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
<link href="css/metro.css" rel="stylesheet">
    <link href="css/metro-icons.css" rel="stylesheet">
    <link href="css/metro-responsive.css" rel="stylesheet">
    <link href="css/metro-schemes.css" rel="stylesheet">

    <link href="css/docs.css" rel="stylesheet">

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/metro.js"></script>
    <script src="js/docs.js"></script>
    <script src="js/prettify/run_prettify.js"></script>
    <script src="js/ga.js"></script>

    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <style>
        @media screen and (max-width: 640px) {
            .countdown {
                font-size: 1rem !important;
            }
        }
    </style>
	 <script>
        $(function(){
            var checks = $("input:radio");
            var lv = $("#lv1");
            checks.on('change', function(){
                if ($(this).is(":checked")) {
                    lv.removeClass(function (index, css) {
                        return (css.match(/(^|\s)list-type-\S+/g) || []).join(' ');
                    }).addClass($(this).val());
                }
            });
        });
    </script>
</header>
<body>

<div class="container-fluid">
    <div class="row">
	
	
	<div class="col-md-12 btn-primary">
	<div class="row">
	    <div class="col-md-12">
		</br>
		</div>
	<div>
	<div class="col-md-12 app-bar green">
	
	   <div class="col-md-3"></div>
	   <div class="col-md-6">
	     <ul class="list-inline col-md-offset-3">
<li>Home</li>
<li>New Order</li>
<li>Item 3</li>
<li></li>
</ul>
	   </div>
	   <div class="col-md-3">
	   <img src="img/Man 3.png" height="30" width="30">
	   </div>
	   </div>
	   </div>
	</div>
	
	
	
	<!-- body content--->
	
	<div class="row">
	   <div class="col-md-12 " style="background-color:white;color:black;">
	         <div class="col-md-4"></div>
	         <div class="col-md-4">this is
			      <div class="panel panel-danger">
                       <div class="panel-heading">
                            <h3 class="panel-title">Sign up </h3>
                                 </div>
                         <div class="panel-body">
						 <div class="col-md-6">
                             <form role="form" action="writer_signup.php" method="POST">
							      <div class="form-group">
								      <label for="email">Email:</label>
									  <div>
									    <input type="email" name="email" class="form-control">
									  </div>
								  </div>
								  </br>
								  
								   <div class="form-group">
								      <label for="pass">Username:</label>
									  <div>
									    <input type="text" name="username" class="form-control">
									  </div>
								  </div>
								  </br>
								  </br>
								   <div class="form-group">
								      <label for="mobile">Phone Number:</label>
									  <div>
									    <input type="digit" name="phone" class="form-control" >
									  </div>
								  </div>
								  </br>
								  
								   <div class="form-group">
								      <label for="country">Country</label>
									  <div>
									    <input type="text" name="country" class="form-control setting-input">
									  </div>
								  </div>
								  </br>
								  
								  <div class="form-group">
								      
									  <div class="checkbox">
									  <label>
									    <input type="checkbox" name="terms" class="">I accept</br> <a href="#">User agreement</a>
										</label>
									  </div>
								  </div>
								  
								  <div class="form-group">
								      
									
								  </div>
							
							 </div>
							 <div class="col-md-6">
							        <div class="form-group">
								      <label for="repeat pass">Bill address</label>
									  <div>
									    <input type="password" name="address" class="form-control setting-input">
									  </div>
								  </div>
								  </br>
								  <div class="form-group">
								      <label for="repeat pass">Repeat Password:</label>
									  <div>
									    <input type="password" name="password" class="form-control setting-input">
									  </div>
								  </div> 
								  </br>
								  <div class="form-group">
								      <label for="repeat pass">Repeat Password:</label>
									  <div>
									    <input type="password" name="password2" class="form-control setting-input">
									  </div>
								  </div>
								    <div>
									    <button type="submit" name="signup" class="form-control setting-input btn-success">Sign-up</button>
									  </div>
							       
							 </div>
							  </form>
						
                        </div>
                 </div>
			 </div>
	         <div class="col-md-4">  

       
                </div>
	   
	   </div>
	</div>
</div>
	
</div>	
</div>
</body>
</html>