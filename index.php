<?php
	ob_start();
					 
  

				       if(isset($_POST['centerlogin']) ) {					         
						echo $email1=$_POST['email1'];
							echo $pass1=$_POST['password1'];
							echo $need=$_POST['need'];
							 if( $need=='order'){
							        $res=mysql_query("SELECT * FROM customers WHERE email='$email1' &&  password='$pass1'");
							 if($res){ 
							      echo "yes";
							 if($row=mysql_num_rows($res) !==0) {
							     
										 while ($row=mysql_fetch_assoc($res)) {
									   
													$dbusername=$row["username"];
													$dbemail=$row["email"];
													$dbpassword=$row["password"];
													   $id=$row["customerid"];
												   
												   echo"hi mwana";
										}
									   if($email1==$dbemail && $pass1==$dbpassword){
												   session_start();
												   echo "kihiko";
												$_SESSION['username']=$email1;
												$_SESSION['password']=$pass1;
												$_SESSION['id']=$id;
											  header("location:order.php");
										}
										else { 
										   echo " invalid email"; 
										}
                             
								 
								 
							 }
							 else { 
								echo " no such";
							 }
							 
							 } 
							 else {

							   echo " not";
							 }
							 } 
							 else  {						
								$res=mysql_query("SELECT * FROM writers WHERE email='$email1' &&  password='$pass1'");
								if($res){ 
										echo "yes";
									 if($row=mysql_num_rows($res) !==0)  {
										
											 while ($row=mysql_fetch_assoc($res)){
												
												$dbusername=$row["username"];
												$dbemail=$row["email"];
												$dbpassword=$row["password"];
												   $id=$row["customerid"];
											   
											   echo"hi mwana";
											}
										   if($email1==$dbemail && $pass1==$dbpassword){
											
											   session_start();
												   echo "kihiko";
												$_SESSION['username']=$email1;
												$_SESSION['password']=$pass1;
												$_SESSION['id']=$id;
											  header("location:writer_home.php");
										   } 
										   else {
										 
										   echo " invalid email"; 
										  }
									 
											 
										 
									 } 
									 else {
										echo " no such";
									 }
									 
								} 
							else {

							 echo " not";}
						 
						 
							} 
					   }
					   
					          if(isset($_POST['email']) && isset($_POST['email'])) {
                                $email=$_POST['email'];							  
					            $to=$email;
							  $subject="This is an email";
							  $body=" Your account has been created successfuly";
							  $headers='From:Studyzone.com';
							  
							  if(mail($to,$subject,$body,$header)){
							      echo "we have sent you password in your email";
							  }
							  else{
							    echo  "failed to send an email";
							  }
					        }
					   
			
				
				?>
<!DOCTYPE html>
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
</header>
<body>

<div class="container-fluid">
	  <div class="row bg-lightBlue fg-white " style="background-color:black;color:white ">
			  <div class="col-md-12">  
				  <div class="row">
						<div class="col-md-12" >
						</br>
						</br>
						</br>
						</br>
						<div class="col-md-9"><h1>
							 <b>STUDDYZONE</b></h1>
						</div>

						<div class="col-md-3 col-md-push-"> 
								 <div class="row">
									 <div class="col-md-12 col-md-offset-" style="color:black;">
									
										  <form role="form" method="POST" action="index.php">
											  
										 </br> 
										<a  data-target="#myModal" data-toggle="modal" data-target="#myModal"  class="list-group  " href="#" >
										LOGIN</a>
										&nbsp;
										&nbsp;
										<a   href="sign-up.php" >
									SIGNUP</a>
								   
								   <!--modal-->
										  <div class="modal " id="myModal" tabindex="-4" role="dialog" aria-labelLedby="myModalLabel" aria-hidden="false">
											 <div class="modal-dialog">
												 <div class="modal-content">
													<div class="modal-header btn-success">
															<button type="button" class="close" data-dismiss="modal" aria-hidden="">&times </button>
															<h2 class="modal-title " id="myModalLabel"> <span class="glyphicon glyphicon-user"></span>LOGIN </h2>
															
													</div>
													<div class="modal-body">
															  <b><marquee>We are ready to walk with you through this jouney</marquee></b>
															  <hr/>
															 
															  <div class="form-group">
																	  <label for="Email:" class="col-md-2">Email: </label>
																		  <div class="col-md-10">
																			   <input class="form-control" type="email" required name="email" placeholder="Enter your email" />
																		  </div>
															   </div>
															  </br></br>
															  </br></br>
															  
															  
															  <div class="form-group">
																	<label for="password:" class="col-md-2">Password: </label>
																	<div class="col-md-10">
																		<input class="form-control" required type="password" name="password"  placeholder="******">
																	</div>
															  </div>
															  </br>
															  </br>
																	  
															  <div class="col-md-offset-3">
																  <a href="#"><button onclick="forgetpass()">Forget password<button></a>
															  </div>
													  
													  
													  
													</div>
													<div class="modal-footer">
													
														<button type="submit" class="btn btn-success" name="send" >Log in</button>
													   
													  
													  
													</div>
												 </div>
											 </div>
										  </div> 
										</form>
										
								 </div>
								
							  </div>
						 
						 </div>

          </div>
</div>
<div class="row">
    <div class="col-md-12">
		   <div class="col-md-4"> </div>
		   <div class="col-md-4">
				   </br></br></br>
				   </br></br></br>
				   </br></br></br>
				   
				  
				   <p><b><h1>Get an article at only</br>
					$7.5 per page</h1></b></p>
					
								
					</br>
					</br>
					
			
			
		 </div>
	    <div class="col-md-4"> 
	    </div>
	</div>
</div>

<div class="row">
		 <div class="col-md-12">
				  <div class="col-md-2"></div>
				  <div class="col-md-7">
					  hi mr
						  <div class="well" style="color:black;background-color:yellow">
									<form role="form" class="form-inline" method="POST">
									   <div class="form-group">
											   <label for="need"> I need:</label>
											   <select name="need" class="form-control">
													<option value="order"> Order</option>
													<option value="writer">Writer</option>
											   </select>
										  
									   </div>
									   &nbsp;&nbsp;&nbsp;
									   <div class="form-group">
										    <label for="my email">My Email:</label>
										    <input name="email1" type="email" placeholder="My email">
									   </div>
									   &nbsp;&nbsp;&nbsp;
									   <div class="form-group">
										  <label for="password">Password:</label>
										  <input type="password"  name="password1" class="form-control">
									   </div>
									   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									   <div class="form-group">
											<button type="submit" name="centerlogin"class="btn btn-success">SUBMIT</button>
										
									   </div>
									</form>
									
									
						  </div>
				  </div>
				  <div class="col-md-3"></div>
			 
		 </div>
</div>
<div class="row">
     
	 <div class="col-md-12 bg-steel no-tablet-portrait no-phone">
            <div class="container padding20 fg-white">
                <div class="carousel bg-transparent" data-role="carousel" data-controls="false" data-markers="false" data-effect="fade" data-height="200">
                    <div class="slide fg-white">
                        <div class="place-left" style="margin-right: 20px">
                            <img src="img/writers.jpg" style="height: 200px">
                        </div>
                        <h1>Essay Writing Services</h1>
                        <p>Have you ever wondered, "I wish someone would write my essay"? If you answer is "yes, too many times!" we'll happily help you change it to a simple request you can leave with our customer support like "I'd like to buy an essay for my MBA project". Essay writing is a skill not everyone possesses.
                        Having a professional writer complete your admission essay, or college application gives you an awesome opportunity to gain an unforgettable experience as a student. All you have to do is ask for help a reliable Edusson writer, who will complete a custom paper for you, and do it fast. There's nothing illegal about asking for help. We offer a
						legit service that is not just affordable, it's cheap! ... show more</p>
                    </div>

                    <div class="slide fg-white">
                        <div class="place-left" style="margin-right: 20px">
                            <img src="img/download.jpg" style="height: 200px">
                        </div>
                        <h1>Essay Writing Services</h1>
                        <p>Have you ever wondered, "I wish someone would write my essay"? If you answer is "yes, too many times!" we'll happily help you change it to a simple request you can leave with our customer support like "I'd like to buy an essay for my MBA project". Essay writing is a skill not everyone possesses.
                        Having a professional writer complete your admission essay, or college application gives you an awesome opportunity to gain an unforgettable experience as a student. All you have to do is ask for help a reliable Edusson writer, who will complete a custom paper for you, and do it fast. There's nothing illegal about asking for help. We offer a
						legit service that is not just affordable, it's cheap! ... show more</p>
                        <a class="button primary" data-target="#myModal" data-toggle="modal" data-target="#myModal"  class="list-group  " href="#">Place an order now</a>
                    </div>

                    <div class="slide fg-white">
                        <div class="place-left" style="margin-right: 20px">
                            <img src="img/student.jpg" style="height: 200px">
                        </div>
                        <h1>Essay Writing Services</h1>
                        <p>Thanks to the company JetBrains for supporting the project in the form of a license for a great product PhpStorm.</p>
                        <a class="button success" data-target="#myModal" data-toggle="modal" data-target="#myModal"  class="list-group  " href="#"">Place an order</a>
                    </div>
                </div>
            </div>
        </div>
	 </br>
	
	 
	 
</div>
<div class="row">
     <div class="col-md-12 " style="background-color:white;color:black">
	 <div class="col-md-2">
	 <?php
				require("connection.php");
		   if(isset($_POST['send']) && isset($_POST['email'])&& isset($_POST['password']) ) {					 
				 $email=$_POST['email'];
				 $pass=$_POST['password'];
				 $res=mysql_query("SELECT * FROM customers WHERE email='$email' ");
				 if($res){ 
					echo "yes";
					$numrow=mysql_num_rows($res);
				   if($numrow !==0) {					 
						 while ($row=mysql_fetch_assoc($res)){						
									$dbusername=$row["username"];
									$dbemail=$row["email"];
									$dbpassword=$row["password"];
									   $id=$row["customerid"];
								   
									echo"hi mwana";
						}
					   if($email==$dbemail && $pass==$dbpassword){						
							session_start();						   
							$_SESSION['username']=$dbemail;
							$_SESSION['password']=$dbpassword;						
							$_SESSION['id']=$id;
							header("location:order.php");
					   } 
					   else { 
					  
						   echo " invalid email";
					  }
					 
					 
					 
				} 
					else
					{

					 $res=mysql_query("SELECT * FROM writers WHERE email='$email' && password='$pass' ");
					 if($res){ 
						 echo "yes";
							$numrow=mysql_num_rows($res);
						   if($numrow !==0)	 {					 								
								 while ($row=mysql_fetch_assoc($res)){								
								$dbusername=$row["username"];
								$dbemail=$row["email"];
								$dbpassword=$row["password"];
								$id=$row["customerid"];
							   
								}
							   if($email==$dbemail && $pass==$dbpassword){
										session_start();									   
										$_SESSION['username']=$dbemail;
										$_SESSION['password']=$dbpassword;
										
										$_SESSION['id']=$id;
									  header("location:writer_home.php");
								}
								else { 
								  echo " invalid email";
								}
							 
								 
								 
							} 

							 else {

						       echo " not existing";
						   }
						 
					}
					 
					}
					 
			   }
		
		    }
				?>
</div>
<div class="col-md-2" >
		</br>
		</br>
		1650</br>
		completed
		orders
</div>
							
<div class="col-md-2">
</br>
</br>	

400</br>
qualified
writers
</div>
<div class="col-md-2">
</br>
</br>
71</br>
writers
online now</div>
<div class="col-md-2">
</br>
</br>
9.5</br>
average
writer's rating</div>
 </br>
 </br>
 </br>
 </br>
 </br>
 </br>
 </br>
 </br>
 </br>
 </br>
 </br>
 
	 </div>
</div>
<div class="row">
     <div class="col-md-12 bg-green " style="background-color:">
				 <div class="col-md-4"></div>
				 <div class="col-md-4 aline-center">
						<h4>Enjoy the result</h4>
						<div class="padding20 bg-green no-phone ">
							<h1>Hello world!</h1>
							<div class="col-md-10col-md-push-3">
							<div class="countdown col-md-push-" data-role="countdown" data-days="2 "></div>
							</div>
						</div>
				</div>
				<div class="col-md-2"></div>
				 </br>
				 </br>
				 </br>
				 </br>
				 </br>
				 </br>
				 </br>
	 
	 
	 </div>
</div>
<div class="row">
     <div class="col-md-12 btn-success" style="background-color:green">
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
					 Use of Studyzone.com complies with educational standards and does not violate any regulations issued by educational institutions. The service is completely LEGAL and can be used for:
					Additional insight into the subject with appropriate detailing of key questions to cover;</br>
					Provision of reasoning for your own statements and further research;</br>
					Paraphrasing according to educational guidelines issued by your college or university in regards to plagiarism and acceptable paraphrase;</br>
					Use of citations (please follow the citation recommendations)
					We value your respect towards copyrights of content provided by our writers.</br>
					The services provided are meant to assist in providing a guideline.</br>
					The services provided are intended to be used for research or study purpose only.</br>
					We accept
					Local Sites
		    </div>
      </div>
	 <div class="col-md-2"></div>
	 </br>
	 </br>
	 </br>
	 </br>
	 </br>
	 </br>
	 </br>
	
	 
	 </div>
</div>
</div>
</div>

</div>







 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>
