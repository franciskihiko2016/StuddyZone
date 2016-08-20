<?php
  ob_start();
	 
 	 
  
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['password'] )) 
{
	header("location:index.php");
	exit();	
} else{

if (!isset($_SESSION['order_id']) && !isset($_SESSION['customer_need']) )
{
	header("location:index.php");
	exit();	
} 
else{


 echo  $order_id =$_SESSION['order_id'];
        
                          echo   $customer_need= $_SESSION['customer_need'];
                              echo   $subject=$_SESSION['subject'];
                                 $pages=$_SESSION['no_pages'];
                                $service= $_SESSION['service'];
                                 $level=$_SESSION['writer_level'];
                                 $citationformat=$_SESSION['citation_format'];
                                 $no_citation=$_SESSION['cited_resources'];
                                 $instructions=$_SESSION['instruction'];
                                 $final_file=$_SESSION['document'];
                                 $status=$_SESSION['status'];
                                $deadline =$_SESSION['deadline'];
                                 $posted_date=$_SESSION['posted_date'];
                                 $customer_id=$_SESSION['customer_id'];
                                 $topic=$_SESSION['topic'];
								 $price= $pages * 7.5;                                      
   
}

  require("connection.php");
     $username=$_SESSION['username'];
     $pass=$_SESSION['password'];
	 echo $username;
	 echo $pass;
	 
	 if($sel=mysql_query("SELECT * FROM customers WHERE email='$username'"))
	 {
	 
	      $numrow=mysql_num_rows($sel);
		  if( $numrow !==0)
		 
		  {
		      while ($row=mysql_fetch_assoc($sel))
			  {
			     
				  
			  
			  
			  }
		  
		  } else { echo " no record";}
	 
	 } else { echo "failed";}
	 
	 

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
                    <li><a href="" class="fg-white1 fg-hover-yellow">Profile</a></li>
                    <li><a href="" class="fg-white2 fg-hover-yellow">Security</a></li>
                    <li><a href="" class="fg-white3 fg-hover-yellow">Exit</a></li>
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
		</div>

	</div>
	
	
	
	<!-- body content--->
	
	<div class="row">
	   <div class="col-md-12 " style="background-color:white;color:black;">
	         <div class="col-md-2"></div>
	         <div class="col-md-8">this is
			  
			 <form action="order_complete.php" role="form">
			      <div class="panel panel-success">
				    <div class="panel-heading">
					<h2><b>Check your order and make a deposit</b></h2>
					</div>
					   <div class="tabcontrol2" data-role="tabcontrol">
                            <ul class="tabs">
                                <li><a href="#frame_5_1">Work details</a></li>
                                <li><a href="#frame_5_2">Work Details</a></li>
                                <li class=""><a href="#frame_5_3">Attached files</a></li>
                            </ul>
                            <div class="frames">
                                <div class="frame" id="frame_5_1">
								<table class="table table-striped" style="background-color:grean;font-size:;font-weight:bold;">
                           
                           <tr><td>Type of  paper</td><td><?php echo $customer_need; ?></td></tr>
                           
                           <tr ><td>Topic</td><td><?php echo $topic; ?></td></tr>
                           <tr><td>Subject</td><td><?php echo $subject; ?></td></tr>
                           
						   
                           <tr><td>No of Pages</td><td><?php echo $pages; ?></td></tr>
						   <tr><td>Deadline</td><td><?php echo  $deadline; ?></td></tr>
						   
						  
                          
                       
                          
                           
                          
						   
                    </table>
								
								</div>
                                <div class="frame" id="frame_5_2">
								<table class="table table-striped" style="background-color:grean;font-size:;font-weight:bold;">
								
								  <tr><td>Type of Service </td><td><?php echo $service; ?></td></tr>
						    <tr><td>Writer Level</td><td><?php echo $level; ?></td></tr>
							<tr><td>No of cited resources</td><td><?php echo $no_citation; ?></td></tr>
                           <tr><td>Format of citation</td><td><?php echo $citationformat; ?></td></tr>
                           </table>
								</div>
                                <div class="frame" id="frame_5_3">
								<table class="table table-striped" style="background-color:grean;font-size:;font-weight:bold;">
								  <tr><td>Paper instructions</td><td><?php echo $instructions; ?></td></tr>                           
                           <tr><td>File Name:</td><td><?php echo $final_file; ?></td></tr>
								</table>
								</div>
                            </div>
							
                        </div>
						<table class="table table-striped" style="background-color:grean;font-size:20;font-weight:bold;">
						<tr class=" " ><td>Total Price</td><td><?php echo  '$'; echo $price; ?></td></tr>
						
                           <tr class="bg-white"><td> Amount to Deposit</td><td><?php echo  '$'; echo $price; ?></td></tr>
					 <tr class=" primary " ><td>Payment Method</td><td>
					 
						   
						      
							   
									   <div class="tabcontrol2" data-role="tabcontrol">
                            <ul class="tabs">
                                <li><a href="#frame_5_9"> 
							       paypall<input type="radio" name=""/>
							   </a></li>
                                <li><a href="#frame_5_10">
								 card
							       
									</a></li>
                                
                            </ul>
                            <div class="frames">
                                <div class="frame" id="frame_5_9">1
								<a href="https://www.paypal.com"><img src="img/images.png"/></a>
								sdfghjk
								</div>
                                <div class="frame" id="frame_5_10">2ertyuio</div>
                            </div>
                        
							  
						   </div>
						    </td></tr>
						   </table>
						  
				  </div>
			  <div class="">
			  <button class="btn-success"><a class="button btn-primary" href="#" style="color:black"><b>Make a Deposit</b></a></button>
			 </div>
			 </form>
			 
			 </div>
	         <div class="col-md-2"></div>
			 <div class="row">
			    <div class="col-md-12">
				
				<div class="row">
				     <div class="col-md-12">
					  <div class="col-md-2"></div>
					  <div class="col-md-8">
					   
								   <?php
						       $sql=mysql_query("SELECT * FROM inaction_order WHERE order_id =$order_id ");
							   if($sql)
							   { 
							     $rows=mysql_num_rows($sql) ;
								 if($rows !==0)
								  {
							       echo "orders";
								   while( $numrows=mysql_fetch_assoc($sql))
								   {
								    $dbcustomerneed=$numrows['writer_id'];
								     $dborder_id=$numrows['order_id'];
								     $dbcomment=$numrows['comment'];
								    
								    echo $rand=md5( $dborder_id);
								   
								   echo" 
							
											   <div class=\"panel panel-success\">
<div class=\"panel-heading\">
<h4 class=\"panel-title\">

<img src=\"img/Man 3.png\" height=\"40\" width=\"40\"><b>$dbcustomerneed</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>Uploaded date</b>&nbsp;&nbsp;$dborder_id <a href=\"writer-profile.php?id=$dborder_id \" ><span class=\"badge pull-right\"> View writers profile</span></a></br>
   <div class=\"col-md-12\" style=\"background-color:white;\">$dbcomment</div>
<a data-toggle=\"collapse\" data-parent=\"#accordion\"
href=\"#$rand\">
 <button class=\"button   pull-right\">
                              <span class=\"badge pull-right\"> Comment</span>
                                 </button> </br      
</a>
</h4>
</br>
</br>
</div>
<div id=\"$rand\" class=\"panel-collapse collapse\">
<div class=\"panel-body\">
<form method=\"POST\" action=\"writer_home.php\">
<textarea name=\"comment\" type=\"text\"class=\"form-control\" rows=\"3\" width=\"100%\"></textarea></br>

<button type=\"submit\" name=\"submit_bid\" class=\"btn btn-primary\">Reply</button>
</form>";
if(isset($_POST['submit_bid']))
							{
							   $comment=$_POST['comment'];
							   echo $dborder_id;
							   
							    $qry = mysql_query("INSERT into inaction_order (order_id,writer_id,comment) VALUES('$dborder_id','$username','$comment')");
							   if($qry)
							    {
								echo  $new_status ;
								 $res="UPDATE   orders SET status='$new_status' WHERE order_id='$dborder_id'";
								   echo "data inserted";
								} else { echo "sorry an error occured";}
							} 
echo "</div>
</div>
</div>
							
							
							
							";
							
							
							
								   }
								   }
							   
							   } else { echo "no orders";}
							   
						   
						   
						   
						   ?>
						
					
					  </div>
					    <div class="col-md-2"></div>
					 </div>
				</div>
				  
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