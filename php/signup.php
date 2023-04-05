<!DOCTYPE html>
<html>
    <head>
	
        <!--link css-->
        <link rel = "styleSheet" href = "../css/harsha.css.css">

        <title>
            Boat Safari Cruise
        </title>
          <style>
		     div.signup{
                  max-width: 50%;
                  margin:20px auto;
                  padding:30px;
                  border:1px black solid;
                  background-color:lightgray;
                }
             div.signup hr{
                  margin-top:0 !important;
                  margin-bottom: 20px;
                }
             div.signup span{
                  margin-left:150px;
                  display: flex;
                  justify-content:space-between;
                  width:400px;
                }

             .submitip{
                  border-radius:0;
                  border: 2px black solid;
                  background-color:lightskyblue;
                  padding: 10px 24px;
                  margin:50px 40%;
                }
             .submitip:hover{
                  background-color: pink;
				}  
				
			</style>	
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
                            
                        <a href = "Login page.php"><button name="Log" Value="Login" id="loginsignup"><b>Login</b></button></a>                        

                        <a href = "User_profile.php"><input type="image" src="../images/useraccount.png" width="38px" height="38px" id="profilebtn"></a>
                            
                           
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
        <!--Sign Up-->
		<div class="signup">
		    <h3>Sign Up</h3>
			
			<form method ="post" action="process.php">
			
			
			<span>Name :<input type="text" placeholder="First & Last name" name="name"></span><br>
			
			<span>Date of Birth :<input type="text" placeholder="12 May 2016" name="dateof_birth"></span><br>
			
			<span>Email :<input type="text" placeholder="Enter your Email" name="email"></span><br>
			
		    <span>Phone Number :<input type="text" placeholder="Enter your Phone Number" name="phone_number"></span><br>
			
			<span>Choose password :<input type="text" placeholder="Enter Password" name="choose_password"></span><br>
			
            <span>Re Enter password :<input type="text" placeholder="Re Enter Your  Password" name="reenter_password"></span><br>
			
			<input type="Submit" name="signup"  value="sign up" class="submitip" >
			
			</form>
			
			
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