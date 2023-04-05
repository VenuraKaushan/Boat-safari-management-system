<?php session_start(); ?>
<!DOCTYPE html>

<html>
    <head>
        <!--link css-->
        <link rel = "styleSheet" href = "css/kasun.css.css">

        <title>
            Boat Safari Cruise
        </title>
			<style>
		
		.box {
				width: 500px;
				height: 500px;
				padding: 50px;
				border: 3px solid black;
				background-color:white;
			}
		

		.form-control {
				color: white;
				background-color:midnightblue ;
				border: 2px solid transparent;
				height: 30px;
				padding-left: 20px;
				vertical-align: middle;
				}

		.form-control:focus {
					color: white;
					background-color:Skyblue ;
					border: 2px solid #2d4dda;
					box-shadow: none;
					}		
		.button {
					background-color: black;
					border: none;
					color: blue;
					padding: 16px 32px;
					text-align: center;
					font-size: 16px;
					margin: 4px 2px;
					opacity: 0.6;
					transition: 0.3s;
					display: inline-block;
					text-decoration: none;
					cursor: pointer;
				}
		.button:hover {opacity: 1}

        
		</style>
        <!--class for header-->
        <div class = "header">
            <h1>Boat Safari Cruise</h1>
        </div>

    </head>

    <body>
        <!--Link logo-->
        <div class = "img">
            <img src = "Logo/Free_Sample_By_Wix.jfif" alt = "Logo" width="150px">

            <!--search bar-->
                <form class="searchform">
                     <span>
                          <input type="text" class="search rounded" placeholder="Search here" style="padding-top:5px";>
                     </span>
                </form>

                <!--heading buttons-->
                <div class="heading-cols" >
                    <div style="float:right;">

                            <button name="Admin Login" Value="Admin Login" id="loginsignup"><b>Admin Login</b></button>
                        
                            <button name="Sign Up" Value="Sign Up" id="loginsignup"><b>Sign Up</b></button>
                            
                            <button name="Login" Value="Login" id="loginsignup"><b>Login</b></button>                            

                            <input type="image" src="Logo/useraccount.png" width="38px" height="38px" id="profilebtn">
                            
                           
                    </div>        
                </div>
        </div> 

        <hr>

        <!-- Navigation Bar -->
        <div class="navi">
            <a href="#home">Home</a>
            <a href="#packages">packages</a>
            <a href="#contact">Contact Us</a>
            <a href="#about">About Us</a>
            <a href="#settings">Settings</a>
        </div>
          
        
        <!--CONTENT-->
        <!--<h2>--User Profile--</h2>-->
        <?php
		if(isset($_SESSION['status']))
        {
            echo "<h4>".$_SESSION['status']."</h4
            >";
            unset($_SESSION['status']);
        }
        ?>
        <center><h1>User Profile</h1></center>
        <center>
        <img src="https://media.istockphoto.com/vectors/user-icon-flat-isolated-on-white-background-user-symbol-vector-vector-id1300845620?k=20&m=1300845620&s=612x612&w=0&h=f4XTZDAv7NPuZbG0habSpU0sNgECM0X7nbKzTUta3n8=" alt="Paris" width="200" height="200">
        <input type="file" id="image_input" accept="image/png, image/jpg">
        <div id="display_image"></div>

        <script src="script.js"></script>
        </center>
        <center>
        
			
            <div class="box">
			<form action = "User_profile_action.php" method = "POST">
            User id<br>
			<input class="form-control" type="text" placeholder="User Name" name="userid"/>
			<br>
			<br>
            First name<br>
			<input class="form-control" type="text" placeholder="User Name" name="fname"/>
			<br>
			<br>
            Last name<br>
			<input class="form-control" type="text" placeholder="User Name" name="lname"/>
			<br>
			<br>
			Email<br>
			<input class="form-control" type="text" placeholder="Email" name="email"/>
			<br>
			<br>
			Phone number<br>
			<input class="form-control" type="text" placeholder="Phone number" name="phonenumber"/>
			<br>
			<br>
			Date of birth<br>
			<input class="form-control" type="text" placeholder="Date of birth" name="dateOfBirth"/>
			<br>
			<br>
            <!--<input type="submit" name="update" value="UPDATE DATA" class="button"/>-->
			<button type="submit" name="update" class="button">UPDATE DATA</button>
            <h1></h1>
			</form>
			</div>
		</center>
		         
        
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
               <center> <a href="https://www.facebook.com/"><img src="Logo/facebook.png" alt="facebook" width="12%"></a>
                <a href="https://twitter.com/"><img src="Logo/twitter.png" alt="Twitter" width="12%"></a>
                <a href="https://www.instagram.com/"><img src="Logo/nstagram.png" alt="Instagram" width="12%"></a>
                <a href="https://www.google.com/"><img src="Logo/googleplus.png" alt="GooglePlus" width="12%"></a> </center>
            </div>

            <!--Payment method-->
            <div class="foot-cols">
                <center><img src="Logo/206684_visa_method_card_payment_icon.png" alt="visa" width="12%">
                <img src="Logo/1156750_finance_mastercard_payment_icon.png" alt="master" width="12%">
                <img src="Logo/1933704_american express_amex_charge_credit card_payment_icon.png" alt="american express" width="12%">
                <img src="Logo/206686_network_payment_discover_card_method_icon.png" alt="Discover" width="12%"></center>
            </div>
            
        </div>
     
      
       <script src="script.js"></script>
    </body>
</html>







