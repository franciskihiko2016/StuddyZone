

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
        function no_submit(){
            return false;
        }

        function notifyOnErrorInput(input){
            var message = input.data('validateHint');
            $.Notify({
                caption: 'Error',
                content: message,
                type: 'alert'
            });
        }
    </script>
</header>
<body>
<div class="app-bar fixed-top darcula" data-role="appbar">
        <a class="app-bar-element branding col-md-push-6"></a>
        <span class="app-bar-divider col-md-push-6"></span>
        <ul class="app-bar-menu col-md-push-8">
            <li class="" ><a href="" style="color:black;">Dashboard</a></li>
			 <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">Home</a></li>
            <li><a href=""></a></li>
            <li>
                <a href="" class="dropdown-toggle">&nbsp;&nbsp;&nbsp;&nbsp;</a>
                <ul class="d-menu" data-role="dropdown">
                    <li><a href="">Completed</a></li>
                    <li class="divider"></li>
                    <li>
                        <a href="" class="dropdown-toggle">Uncompleted</a>
                        <ul class="d-menu" data-role="dropdown">
                            <li><a href=""></a></li>
                            <li><a href=""></a></li>
                            <li><a href=""></a></li>
                            <li class="divider"></li>
                            <li><a href=""></a></li>
                        </ul>
                    </li>
                </ul>
            </li>
           
            <li>
                
                <ul class="d-menu" data-role="dropdown">
                    <li><a href="">ChatOn</a></li>
                    <li><a href="">Community support</a></li>
                    <li class="divider"></li>
                    <li><a href="">About</a></li>
                </ul>
            </li>
			<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Welcome</li>
			<li>&nbsp;&nbsp;&nbsp;<?php echo $username;?></li>
			<li>&nbsp;&nbsp;&nbsp;<img src="img/Man 3.png" height="30" width="30"></li>
        </ul>

        <div class="app-bar-element place-right">
            <span class="dropdown-toggle"><span class="mif-cog"></span> User Name</span>
            <div class="app-bar-drop-container padding10 place-right no-margin-top block-shadow fg-dark" data-role="dropdown" data-no-close="true" style="width: 220px">
                <h2 class="text-light">Quick settings</h2>
                <ul class="unstyled-list fg-dark">
                    <li><a href="" class="fg-white1 fg-hover-yellow">Profile</a></li>
                    <li><a href="" class="fg-white2 fg-hover-yellow">Security</a></li>
                    <li><a href="index.php" class="fg-white3 fg-hover-yellow">Exit</a></li>
                </ul>
            </div>
        </div>
    </div>

<div class="container-fluid">
    <div class="row">
	
	
	<div class="col-md-12 ">
	<div class="row">
	    <div class="col-md-12">
		</br>
		</br>
		</br>
		</br>
		</br>
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
                             <form role="form" action="sign-up.php" method="POST" data-role="validator" data-on-before-submit="no_submit" data-on-error-input="notifyOnErrorInput" data-show-error-hint="false">
							      <div class="form-group">
								      <label for="email">Email:</label>
									  <div>
									    <input type="email" name="email" class="form-control" required>
									  </div>
								  </div>
								  </br>
								  
								   <div class="form-group">
								      <label for="pass">Username:</label>
									  <div>
									    <input type="text" name="username" class="form-control" data-validate-func="required" data-validate-arg="6" data-validate-hint="This field can not be empty!" >
										<span class="input-state-error mif-warning"></span>
                                <span class="input-state-success mif-checkmark"></span>
									  </div>
								  </div>
								  </br>
								  </br>
								   <div class="form-group">
								      <label for="password">Password:</label>
									  <div>
									    <input type="password" name="password" class="form-control" required >
									  </div>
								  </div>
								  </br>
								  
								   <div class="form-group">
								      <label for="repeat pass">Repeat Password:</label>
									  <div>
									    <input type="password" name="password2" class="form-control setting-input" required >
									  </div>
								  </div>
								  </br>
								  
								  <div class="form-group">
								      
									  <div class="checkbox">
									  <label>
									    <input type="checkbox" name="terms" class="" required >I accept</br> <a href="#">User agreement</a>
										</label>
									  </div>
								  </div>
								  
								  <div class="form-group">
								      
									  <div>
									    <button type="submit" name="submit" class="form-control  btn-success">Sign-up</button>
									  </div>
								  </div>
							 </form>
							 <?php
							 
							 if(isset($_POST["submit"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["password2"]) && isset($_POST["username"])&& isset($_POST["terms"])  )
							 {
							 echo "hi";
							     $user=$_POST['username'];
							     $email=$_POST['email'];
							     $pass=$_POST['password'];
							     $pass2=$_POST['password2'];
							     $customerid= md5($email);
								 echo $customerid;
							    if($pass !== $pass2)
								{
								   echo "password does not match";
								
								} else
								{
								
								  require('connection.php');
								   $pass3=$pass;
								   $sel=mysql_query("SELECT * FROM customers WHERE email='$email'");
								   $sel=mysql_query("SELECT * FROM writers WHERE email='$email'");
								   if(!$sel) 
								   { echo "failed";} else
								   { if(mysql_num_rows($sel) !==0){echo "Choose another email or login";}else{
								  $qry = mysql_query("INSERT into customers (username,email,password,customerid) VALUES('$user','$email','$pass3','$customerid')");
									
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
								  header("location:order.php");
										  
										  } else { echo " an error occured";}
								 
								}}
								}
								}
								
								
							 
							 }
							 
							 
							 
							 ?>
                        </div>
                 </div>
			 </div>
	         <div class="col-md-4"></div>
	   
	   </div>
	</div>
	
	<div class="row">
	
     <div class="col-md-12 btn-success" style="background-color:green">
	 </br>
	</br>
	</br>
	</br>
	</br>
	 <div class="col-md-2">
	 
	 <a href="#">For Writer</a></br>
	 <a href="#">For Affiliates</a></br>
	 <a href="#">Terms of use</a></br>
	 <a href="#">Privacy Policy</a></br>
	 <a href="#">FAQ</a></br>
	 <a href="#">How it work</a></br>
	 <a href="#">Contacts</a></br>
	 
	 
	 </div>
	 <div class="col-md-8 aline-center">
	 <div style=" aline-center">
	            <p>       Use of Studyzone.com complies with educational standards and does not violate any regulations issued by educational institutions. The service is completely LEGAL and can be used for:
Additional insight into the subject with appropriate detailing of key questions to cover;</br>
Provision of reasoning for your own statements and further research;</br>
Paraphrasing according to educational guidelines issued by your college or university in regards to plagiarism and acceptable paraphrase;</br>
Use of citations (please follow the citation recommendations)
We value your respect towards copyrights of content provided by our writers.</br>
The services provided are meant to assist in providing a guideline.</br>
The services provided are intended to be used for research or study purpose only.</br>
We accept
Local Sites</p>
</br>
	 </br>
	 </br>
</div>
      </div>
								<div class="col-md-2"></div>
	 
	
	
	 
	 </div>
</div>
</div>
	
</div>	
</div>
</body>
</html>
