<?php
     ob_start();
	 
  
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['password'] )) 
{
	header("location:index.php");
	exit();	
} else{

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
	
	
	<div class="col-md-12 btn-primary">
	<div class="row">
	    <div class="col-md-12">
		</br>
		</div>
	<div>
	<div class="col-md-12 ">
	
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
	         <div class="col-md-2"></div>
	         <div class="col-md-8 ">this is
			 <div class="row">
			       <div class="align-right">
				     Orders
				   </div>
			 
			 </div>
			     <table class="table  btn-success">
                           <th>order id</th><th>writer assigned</th><th>Price </th><th>Status </th><th>Deadline </th>
                           <tr><td>10897</td><td>kevin</td><td>$200</td><td>comlete</td><td>8/5/2016</td></tr>
                           <tr><td>10897</td><td>kamau</td><td>$200</td><td>pending</td><td>2/9/2016</td></tr>
                           <tr><td>10897</td><td>kevin</td><td>$200</td><td>comlete</td><td>8/5/2016</td></tr>
                         
						   
                    </table>
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
	         <div class="col-md-2"></div>
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
</body>
</html>
<?php ;}?>