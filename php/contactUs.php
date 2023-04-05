<!DOCTYPE html>
<html>
    <head>
		<!--link css-->
        
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		
		<link rel = "styleSheet" href = "../css/contactus.css">

        <title>
            Contact Us
        </title>

        <!--class for header-->
        <div class = "header">
            <h1>Boat Safari Cruise</h1>
        </div>

    </head>

    <body>
         <!--Link logo-->
         <div class = "img">
            <img src = "../images/Free_Sample_By_Wix.jfif" alt = "Logo" width="150px">

            <!--search bar-->
                <form class="searchform">
                     <span>
                          <input type="text" class="search rounded" placeholder="Search here" style="padding-top:5px";>
                     </span>
                </form>

                <!--heading buttons-->
                <div class="heading-cols" >
                    <div style="float:right;">

                      <a href = "adminloginpage.php" ><button name="Admin Login" Value="Admin Login" id="loginsignup"><b>Admin Login</b></button></a>
                        
                      <a href = "signup.php"><button name="Sign Up" Value="Sign Up" id="loginsignup"><b>Sign Up</b></button></a>
                          
                      <a href="Login page.php"><button name="Log" Value="Login" id="loginsignup"><b>Login</b></button></a>                        

                      <a href="User_profile.php"><input type="image" src="../images/useraccount.png" width="38px" height="38px" id="profilebtn"></a>
                            
                           
                    </div>        
                </div>
        </div> 

        <hr id="hr1">

        <!-- Navigation Bar -->
        <div class="navi">
            <a href="html for system.php">Home</a>
            <a href="Category.php">packages</a>
            <a href="contactUs.php">Contact Us</a>
            <a href="abouit us.php">About Us</a>
            <a href="#settings">Settings</a>
        </div>
          
        
        <!--CONTENT-->
        <div class="content">
			<div class="left">
			<h2>Welcome to help center</h2>
			<ul>
			<li><p>What is Boat safari Cruise? <a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></p></li>
			<li><p> What are the packages that Boat Safari Cruise offers? <a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></p></li>
			<li><p> Any safety concerns that you may have, feel free to contact us.<a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a></p></li>
			</ul>
			
			</div>
			
			<div class="right">
			<h2>Still need help?</h2> <br/>
				<select name="email">
					<option value="sendemail">Send us an E-mail</option>
					<option value="Email">bsafaricruise@gmail.com</option>
				</select>
				 <br/>
				 <br/>
				 <br/>
				 <br/>
				 
				 <select name="Custno">
					<option value="callcustserv">Call Customer Service</option>
					<option value="custno">(+94)0XX XXXX XXX</option>
				</select>
			</div>
		</div>	
        
        <!--Footer below-->
        <hr>

        <div class="footer">
            <!--class for contact details-->
            <div class ="foot-cols">
                <h3>Hot Line : (+94)0XX XXXX XXX / (+94)0XX XXXX XXX</h3>
                <h3>Mail     : bsafaricruise@gmail.com</h3>
            </div>


            <!--Social media-->
            <div class="foot-cols">
               <center> <a href="https://www.facebook.com/"><img src="../images/facebook.png" alt="facebook" width="12%"></a>
                <a href="https://twitter.com/"><img src="../images/twitter.png" alt="Twitter" width="12%"></a>
                <a href="https://www.instagram.com/"><img src="../images/nstagram.png" alt="Instagram" width="12%"></a>
                <a href="https://www.google.com/"><img src="../images/googleplus.png" alt="GooglePlus" width="12%"></a> </center>
            </div>

            <!--Payment method-->
            <div class="foot-cols">
                <center><img src="../images/206684_visa_method_card_payment_icon.png" alt="visa" width="12%">
                <img src="../images/1156750_finance_mastercard_payment_icon.png" alt="master" width="12%">
                <img src="../images/1933704_american express_amex_charge_credit card_payment_icon.png" alt="american express" width="12%">
                <img src="../images/206686_network_payment_discover_card_method_icon.png" alt="Discover" width="12%"></center>
            </div>
            
        </div>
       
    </body>
</html>