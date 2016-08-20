
 <?php
     ob_start();
	 

session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['password'] )) 
{
	header("location:index.php");
	exit();	
} else{
	
  require("connection.php");
  
   $username =$_SESSION['username'];
   $password =$_SESSION['password'];
   
   $result=mysql_query("SELECT * FROM customers WHERE username=$username && password=$password");
   
             if($result){
			 
			    echo "done";
			 } 
			 else {
				 echo "not yet";
			 }
     
	echo  $username;
	echo  $password;

		
           
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
</header>
<body>
 <div class="app-bar fixed-top darcula" data-role="appbar">
        <a class="app-bar-element branding col-md-push-6"></a>
        <span class="app-bar-divider col-md-push-6"></span>
        <ul class="app-bar-menu col-md-push-8">
            <li class="" ><a href="" style="color:black;">Dashboard</a></li>
			 <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="">Home</a></li>
            <li><a href=""></a></li>
            <li>
                <a href="" class="dropdown-toggle">&nbsp;&nbsp;&nbsp;&nbsp;Orders</a>
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
                    <li><a href="writer_editprofile.php" class="fg-white1 fg-hover-yellow">Profile</a></li>
                    <li><a href="" class="fg-white2 fg-hover-yellow">Security</a></li>
                    <li><a href="index.php" class="fg-white3 fg-hover-yellow">Exit</a></li>
                </ul>
            </div>
        </div>
    </div>
<div class="container-fluid">
    <div class="row">
	
	
	<div class="col-md-12 btn-">
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
	   <div class="col-md-12 btn-default bg-white" style="color:black;">
	         <div class="col-md-2"></div>
	         <div class="col-md-8">
                           <div class="col-md-8">
						     
						   <?php
						       $sql=mysql_query("SELECT * FROM orders WHERE status !='completed' ");
							   if($sql) { 
							  
							     $rows=mysql_num_rows($sql) ;
								 if($rows !==0) {
								 
							       echo "orders";
								   while( $numrows=mysql_fetch_assoc($sql))  {
								 
								    $dbcustomerneed=$numrows['customer_need'];
								     $dborder_id=$numrows['order_id'];
								    $dbsubject=$numrows['subject'];
								   $dbtopic=$numrows['topic'];
								   $dbtopic=$numrows['topic'];
								     $dbposted_date=$numrows['posted_date'];
								     $service_type=$numrows['service_type'];
								   $instruction=$numrows['instruction'];
								   $status=$numrows['status'];
								   $new_status=$status ++;
								   
								   echo" 
							
																				   <div class=\"panel panel-success\">
									<div class=\"panel-heading\">
									<h4 class=\"panel-title\">
									<a data-toggle=\"collapse\" data-parent=\"#accordion\"
									href=\"#$dborder_id\">
									<img src=\"img/Man 3.png\" height=\"40\" width=\"40\"><b>Popic:$dbsubject</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Uploaded date</b>&nbsp;&nbsp;$dbposted_date <button class=\"button   pull-right\"> 
																  <span class=\"badge pull-right\"> (3)biders</span>
																	 </button>    <b>Service:</b>&nbsp;&nbsp; $service_type  &nbsp;&nbsp;  order id: $dborder_id
									</a>
									</h4>
									</div>
									<div id=\"$dborder_id\" class=\"panel-collapse collapse\">
									<div class=\"panel-body\">
									   <div class=\"tabcontrol2\" data-role=\"tabcontrol\">
																<ul class=\"tabs\">
																	<li><a href=\"#frame_5_1\">Work details</a></li>
																	<li><a href=\"#frame_5_2\">Work Details</a></li>
																	<li class=\"\"><a href=\"#frame_5_3\">Attached files</a></li>
																</ul>
																<div class=\"frames\">
																	<div class=\"frame\" id=\"frame_5_1 \">
																	those one
																	<table class=\"table table-striped\" style=\"background-color:grean;font-size:;font-weight:bold;\">
															   
															   <tr><td>Type of  paper</td><td>$dbcustomerneed</td></tr>
															   
															   <tr ><td>Topic</td><td> $dbtopic</td></tr>
															   <tr><td>Subject</td><td> $dbtopic</td></tr>
															   
															   
															   <tr><td>No of Pages</td><td>..</td></tr>
															   <tr><td>Deadline</td><td>..</td></tr>
						   
						  
                          
                       
                          
                           
                          
						   
                    </table>
								
								</div>
                                <div class=\"frame\" id=\" frame_5_2 \">
								<table class=\"table table-striped\" style=\"background-color:grean;font-size:;font-weight:bold;\">
								
								  <tr><td>Type of Service </td><td>$service_type</td></tr>
						    <tr><td>Writer Level</td><td>..</td></tr>
							<tr><td>No of cited resources</td><td>..</td></tr>
                           <tr><td>Format of citation</td><td>..</td></tr>
                           </table>
								</div>
                                <div class=\"frame\" id=\"frame_5_3 \">
								<table class=\"table table-striped \" style=\"background-color:grean;font-size:;font-weight:bold;\">
								  <tr><td>Paper instructions</td><td>$instruction</td></tr>                           
                           <tr><td>File Name:</td><td>this..</td></tr>
								</table>
								</div>
                            </div>
							
                        </div>
						</br>
						</br>
						<div class=\"col-md-4\">
						<b>Topic</b></br>
						<b>Subject</b></br>
						<b>No of pages</b></br>
						<b>Deadline</b></br>
						
						
						
						</div>
						<div class=\"col-md-4\">one</div>
						<div class=\"col-md-4\"><b>Instructions:</b> &nbsp;$instruction</br><b>uploaded file:</b></div>
						$service_type
						<form method=\"POST\" action=\"writer_home.php\">
						<textarea name=\"comment\" type=\"text\" class=\"form-control\" rows=\"3\" width=\"100% \"></textarea></br>
						<button type=\"submit\" name=\"submit_bid\" class=\"btn btn-primary\">Send your Bid</button>
						</form>";
						if(isset($_POST['submit_bid'])){
													
									   $comment=$_POST['comment'];
									   echo $dborder_id;
									   
										$qry = mysql_query("INSERT into inaction_order (order_id,writer_id,comment) VALUES('$dborder_id','$username','$comment')");
									   if($qry){
										
										echo  $new_status ;
										 $res="UPDATE   orders SET status='$new_status' WHERE order_id='$dborder_id'";
										   echo "data inserted";
										} 
										else { 
										  echo "sorry an error occured";
										}
						} 
						echo "</div>
						</div>
						</div>
													
													
													
							";
							
							
							
								   }
								   }
							   
					  } 
					  else {
					     echo "no orders";
					  }
													   
												   
												   
												   
												   ?>
						   <div class="panel panel-success">
<div class="panel-heading">
		<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
				
				     <img src="img/Man 3.png" height="40" width="40">
				</a>
		</h4>
</div>
<div id="collapseTwo" class="panel-collapse collapse">
<div class="panel-body">
<textarea name="comment" type="text"class="form-control" rows="3" width="100%"></textarea></br>
<button type="submit" name="submit_bid" class="btn btn-primary">Send your Bid</button>
</div>
</div>
</div>
						   tyu</div>
                           <div class="col-md-4  bg-grayLighter">
						   
						   <img src="img/passpot.jpg" height="100" width="100">
						   Welcome Back</br>Francis
						   
						   <div class=" bg-white">
						   available work
						   </div>
						   rtyuuu
						   </div>
			 
			 </div>
	         <div class="col-md-2"></div>
			 
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
	
</div>	
</div>

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
<?php ;}?>