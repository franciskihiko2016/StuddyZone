
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
francis

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
						   
						      <div class="bg-grayLighter">
						      <div class="form-group">
							      <label for="About me" class="col-md-4">USERNAME</label>
								  <div  class="col-md-8">
								    Username:
								      <input type="" name="photo" value="Upload your image"  class="form-control"/>
									  
								  </div>
								 
								  </div>
								   </br>
								   </br>
								   </br>
								   </br>
								   </br>
							  </div> 
							  <div class="bg-grayLighter">
						      <div class="form-group">
							      <label for="About me" class="col-md-4">EMAIL</label>
								  <div  class="col-md-8">
								    Email:
								      <input type="text" name="photo" value="Upload your image"  class="form-control"/>
									  
								  </div>
								 
								  </div>
								   </br>
								   </br>
								   </br>
								   </br>
								   </br>
							  </div> 
							   <div class="bg-grayLighter">
						      <div class="form-group">
							      <label for="About me" class="col-md-4">PASSWORD</label>
								  <div  class="col-md-8">
								    Password:
								      <input type="text" name="photo" value="<?php echo $dbpassword;?>"  class="form-control"/>
									  
								  </div>
								 
								  </div>
								   </br>
								   </br>
								   </br>
								   </br>
								   </br>
							  </div> 
							   <div class="bg-grayLighter">
						      <div class="form-group">
							      <label for="About me" class="col-md-4">MOBILE NO:</label>
								  <div  class="col-md-8">
								    mobile:
								      <input type="text" name="photo" value="<?php echo $dbphone;?>"  class="form-control"/>
									  
								  </div>
								 
								  </div>
								   </br>
								   </br>
								   </br>
								   </br>
								   </br>
							  </div> 
							   <div class="bg-grayLighter">
						      <div class="form-group">
							      <label for="About me" class="col-md-4">COUNTRY</label>
								  <div  class="col-md-8">
								    Country:
								      <input type="text" name="photo" value="Upload your image"  class="form-control"/>
									  
								  </div>
								 
								  </div>
								   </br>
								   </br>
								   </br>
								   </br>
								   </br>
							  </div>   
							  <div class="bg-grayLighter">
						      <div class="form-group">
							      <label for="About me" class="col-md-4">	BILL ADDRESS</label>
								  <div  class="col-md-8">
								    Bill address:
								      <input type="text" name="photo" value="Upload your image"  class="form-control"/>
									  
								  </div>
								 
								  </div>
								   </br>
								   </br>
								   </br>
								   </br>
								   </br>
							  </div>   
							  <div class="bg-grayLighter">
						      <div class="form-group">
							      <label for="About me" class="col-md-4">UPLOAD YOUR PHOTO</label>
								  <div  class="col-md-8">
								    Choose a photo:
								      <input type="file" name="photo" value="Upload your image"  class="form-control"/>
									  
								  </div>
								 
								  </div>
								   </br>
								   </br>
								   </br>
								   </br>
								   </br>
							  </div> 
							  
							  <div class="bg-grayLighter">
							  <div class="form-group">
							      <label for="About me" class="col-md-4">ABOUT ME</label>
								  <div  class="col-md-8">
								    Describe yourself in few words:
								    <textarea type="text" name="aboutme" class="form-control"></textarea>
								  </div>
							  </div>
							    </br>
								   </br>
								   </br>
								   </br>
								   </br>
							  </div>
							  
							  
					         <div class="bg-grayLighter">
					         <div class="form-group">
							 
							      <label for="education" class="col-md-4">EDUCATION</label>
								  <div  class="col-md-8">
								    Level of Education :
								    <select type="text" name="education" class="form-control">
									    <option value="None">None</option>
									    <option value="Highschool">High School</option>
									    <option value="Bachelor">Bachelor</option>
									    <option value="Master">Master</option>
									    <option value="Doctor">Doctor</option>
									</select>
									Graduated from:
									<input type="text" name="school" class="form-control"/>
									Field of Specialization:
									<input type="text" name="field" class="form-control"/>
								  </div>
							  </div>
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
							  <div class="bg-grayLighter">
							   <div class="form-group">
							      <label for="ASSIGNMENT" class="col-md-4">PREFERRED ASSIGNMENT</label>
								  <div  class="col-md-8">
								    Please choose your prefered assignment:
								    <select id="product_type" name="product_type" class=" form-control product_type" max-width="70px" value="kihiko">
												<option value="Essay">Essay (Any Type)</option>
												<option value="Article">Article (Any Type)</option>
												<option value="Content">Content (Any Type)</option>
												<option value="Admission Essay">Admission Essay</option>
												<option value="Annotated Bibliography">Annotated Bibliography</option>
												<option value="Argumentative Essay">Argumentative Essay</option>
												<option value="Article Review">Article Review</option>
												<option value="Book/Movie Review">Book/Movie Review</option>
												<option value="Business Plan">Business Plan</option>
												<option value="Case Study">Case Study</option>
												<option value="Coursework">Coursework</option>
												<option value="Creative Writing">Creative Writing</option>
												<option value="Critical Thinking">Critical Thinking</option>
												<option value="Presentation or speech">Presentation or speech</option>
												<option value="Research Paper">Research Paper</option>
												<option value="Research Proposal">Research Proposal</option>
												<option value="Term Paper">Term Paper</option>
												<option value="Thesis/Dissertation Chapter">Thesis/Dissertation Chapter</option>
												<option value="Other">Other</option>
										</select>
								  </div>
							  </div>
							    </br>
								   </br>
								   </br>
								   </br>
								   </br>
								   </br>
								   </br>
								   </br>
							 </div>  
							 <div class="bg-grayLighter">
							   <div class="form-group">
							      <label for="ASSIGNMENT" class="col-md-4">PREFERRED DISCIPLINES</label>
								  <div  class="col-md-8">
								    Please choose your prefered disciplines:
								     <select name="subject" id="subject" class="form-control">
											<option value="" disabled="" selected="selected"></option>
											<option value="Accounting">Accounting</option>
											<option value="Advertising">Advertising</option>
											<option value="Aeronautics">Aeronautics</option>
											<option value="African-American Studies">African-American Studies</option>
											<option value="Agricultural Studies">Agricultural Studies</option>
											<option value="Alternative Medicine">Alternative Medicine</option>
											<option value="American History">American History</option>
											<option value="American Literature">American Literature</option>
											<option value="Anthropology">Anthropology</option>
											<option value="Antique Literature">Antique Literature</option>
											<option value="Application Essay">Application Essay</option>
											<option value="Architecture">Architecture</option>
											<option value="Art">Art</option>
											<option value="Asian Literature">Asian Literature</option>
											<option value="Asian Studies">Asian Studies</option>
											<option value="Astronomy">Astronomy</option>
											<option value="Aviation">Aviation</option>
											<option value="Biology">Biology</option>
											<option value="Business">Business</option>
											<option value="Canadian Studies">Canadian Studies</option>
											<option value="Case Study">Case Study</option>
											<option value="Chemistry">Chemistry</option>
											<option value="Communication Strategies">Communication Strategies</option>
											<option value="Communications and Media">Communications and Media</option>
											<option value="Company Analysis">Company Analysis</option>
											<option value="Computer Science">Computer Science</option>
											<option value="Creative Writing">Creative Writing</option>
											<option value="Criminology">Criminology</option>
											<option value="Dance">Dance</option>
											<option value="Design Analysis">Design Analysis</option>
											<option value="Drama">Drama</option>
											<option value="E-Commerce">E-Commerce</option>
											<option value="East European Studies">East European Studies</option>
											<option value="Economics">Economics</option>
											<option value="Education">Education</option>
											<option value="Education Theories">Education Theories</option>
											<option value="Engineering">Engineering</option>
											<option value="English">English</option>
											<option value="English Literature">English Literature</option>
											<option value="Environmental Issues">Environmental Issues</option>
											<option value="Ethics">Ethics</option>
											<option value="Finance">Finance</option>
											<option value="Geography">Geography</option>
											<option value="Geology">Geology</option>
											<option value="Healthcare">Healthcare</option>
											<option value="History">History</option>
											<option value="Holocaust">Holocaust</option>
											<option value="International Affairs/Relations">International Affairs/Relations</option>
											<option value="Internet">Internet</option>
											<option value="Investment">Investment</option>
											<option value="IT Management">IT Management</option>
											<option value="Journalism">Journalism</option>
											<option value="Latin-American Studies">Latin-American Studies</option>
											<option value="Law">Law</option>
											<option value="Legal Issues">Legal Issues</option>
											<option value="Linguistics">Linguistics</option>
											<option value="Literature">Literature</option>
											<option value="Logistics">Logistics</option>
											<option value="Management">Management</option>
											<option value="Marketing">Marketing</option>
											<option value="Mathematics">Mathematics</option>
											<option value="Medicine and Health">Medicine and Health</option>
											<option value="Movies">Movies</option>
											<option value="Music">Music</option>
											<option value="Native-American Studies">Native-American Studies</option>
											<option value="Nature">Nature</option>
											<option value="Nursing">Nursing</option>
											<option value="Nutrition">Nutrition</option>
											<option value="Painting">Painting</option>
											<option value="Pedagogy">Pedagogy</option>
											<option value="Pharmacology">Pharmacology</option>
											<option value="Philosophy">Philosophy</option>
											<option value="Physics">Physics</option>
											<option value="Political Science">Political Science</option>
											<option value="Psychology">Psychology</option>
											<option value="Public Relations">Public Relations</option>
											<option value="Religion and Theology">Religion and Theology</option>
											<option value="Shakespeare Studies">Shakespeare Studies</option>
											<option value="Sociology">Sociology</option>
											<option value="Sport">Sport</option>
											<option value="Teacher's Career">Teacher's Career</option>
											<option value="Technology">Technology</option>
											<option value="Theatre">Theatre</option>
											<option value="Tourism">Tourism</option>
											<option value="Trade">Trade</option>
											<option value="Web design">Web design</option>
											<option value="West European Studies">West European Studies</option>
											</select>
								  </div>
							  </div>
							    </br>
								   </br>
								   </br>
								   </br>
								   </br>
								   </br>
								   </br>
								   </br>
								   
							 </div>
							 <div class="col-md-4">
							     <button type="submit" class="form-control btn-primary" >SAVE 	CHANGES</button>
							 </div>
							 <div class="8">
							 
							 </div>
					
					      </div>
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