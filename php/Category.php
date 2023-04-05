<!DOCTYPE html>
<html>
    <head>
        <!--link css-->
        <link rel = "styleSheet" href = "../css/harsha.css.css">

        <title>
            Boat Safari Cruise
        </title>
		   <style>
		    

             #moredetail{
    
                  vertical-align: middle;
                    width:120px;
                    height:45px;
                    border: 2px solid black;
                    border-radius: 12px;
                    padding: 5px;
                    margin-right: 8px;
                    margin-bottom: 25px;
					margin-top :180px;
                    background-color:yellow;
                }
             #moredetail:hover{
                    background-color: white;
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
         <h2 style="text-align : center";> Choose Your Category</h2>
         <div class="grid-container">
		  <li class="cards_item">
		  <div class="grid-item" 1>
      <div class="card">
        <div class="card_img"><img src="../images/Normal.jpg"width="410" height="245"></div>
        <div class="card_content">
          <h1 class="card_title">Normal safari</h1>
          <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
          <button class="btn card_btn">Select</button>
        </div>
      </div>
	   </div>
    </li>
		  
		  <li class="cards_item">
		   <div class="grid-item"2>
      <div class="card">
        <div class="card_img"><img src="../images/Special.jpg" width="410" height="245"></div>
        <div class="card_content">
          <h1 class="card_title">Special safari</h1>
          <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
          <button class="btn card_btn">Select</button>
        </div>
      </div>
	  </div>
    </li>
	
	      <li class="cards_item">
		  <div class="grid-item"3>
      <div class="card">
        <div class="card_img"><img src="../images/Group.jpg"width="410" height="245"></div>
        <div class="card_content">
          <h1 class="card_title">Group safari</h1>
          <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
          <button class="btn card_btn">Select</button>
        </div>
      </div>
	   </div>
    </li>
	
	       <li class="cards_item">
		    <div class="grid-item"4 >
      <div class="card">
        <div class="card_img"><img src="./images/Family.jpg"width="410" height="245"></div>
        <div class="card_content">
          <h1 class="card_title">Family safari</h1>
          <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
          <button class="btn card_btn">Select</button>
        </div>
      </div>
	    </div>
		</div>
    </li>
		  
            <button name="Offer" Value="Offer" id="offer"><b>Offer</b></button>
			
			<a href="Package details.php"<button name="More Details" Value="More Details" id="moredetail"><b>More Details>></b></button>
        
        
        
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