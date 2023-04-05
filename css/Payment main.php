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
					height: 550px;
					padding: 50px;
					border: 3px solid black;
					background-color:lightgray;
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
					border-radius: 4px;
					background-color: black;
					border: none;
					color: #FFFFFF;
					text-align: center;
					font-size: 13px;
					padding: 10px;
					width: 150px;
					transition: all 0.5s;
					cursor: pointer;
					margin: 5px;
					}

			.button span {
					cursor: pointer;
					display: inline-block;
					position: relative;
					transition: 0.5s;
					}

			.button span:after {
					content: '\00bb';
					position: absolute;
					opacity: 0;
					top: 0;
					right: -20px;
					transition: 0.5s;
					}

			.button:hover span {
					padding-right: 25px;
					}

			.button:hover span:after {
					opacity: 1;
					right: 0;
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
			<center>
			<div class="box">
        
         
            <h2>Payment Details</h2>
            
                    <form action="Paymentdetails.php" method="post" id="form">

                    <div class="1">
                        <p class="text">Person Name</p>
                        <input class="form-control" type="text" placeholder="Name"  name="name" id ="name" required>
                    </div>
                
                
                    <div class="2">
                        <p class="text">Card Number</p>
                        <input class="form-control" type="text" placeholder="1234 5678 435678" name="no" id="no" required>
                    </div>
                
                
                    <div class="3">
                        <p class="text">Expiry</p>
                        <input class="form-control" type="text" placeholder="MM/YYYY" name="date" id ="date" required>
                    </div>
                
                
                    <div class="4">
                        <p class="text">CVV/CVC</p>
                        <input class="form-control" type="password" placeholder="***" name="cvv" id="cvv" required>
                    </div>
                
				
					<br><br><br>
                
                    
                       
                       <input type="submit" name="paynow" value ="pay now" class="button">
                       <!--<span><a href="http://localhost/IWT%20project/Payment_r.php"><button class="button" name="paynow">pay Now</button></a></span>-->
                    </div>
                </div>
                </form>
  <!--<button class = "b1" name="done" style="float: center;margin:10px 18.2% 0 0;">DONE</button>-->
    
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

        <script>
            var form = document.getElementById('form');
            form.addEventListener('submit',function(e){
                e.preventDefault();
                alert("Payment Success !");
            });
        </script>
       
    </body>
</html>