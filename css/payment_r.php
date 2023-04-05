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
					color: black;
					text-align: center;
					font-size: 18px;
					padding: 20px;
					width: 200px;
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
            * {
                font-family: sans-serif
                }

            .content-table {
                border-collapse: collapse;
                margin: 25px 0;
                font-size: 0.9em;
                min-width: 400px;
                border-radius: 5px 5px 0 0;
                overflow: hidden;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
                }

            .content-table thead tr {
                background-color: #009879;
                color: #ffffff;
                text-align: left;
                font-weight: bold;
                }

            .content-table th,
            .content-table td {
                padding: 12px 15px;
                }

            .content-table tbody tr {
                border-bottom: 1px solid #dddddd;
            }

            .content-table tbody tr:nth-of-type(even) {
                background-color: #f3f3f3;
            }

            .content-table tbody tr:last-of-type {
                border-bottom: 2px solid #009879;
            }

            .content-table tbody tr.active-row {
                font-weight: bold;
                color: #009879;
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
        <?php
            include_once 'dataBase.php';
            $result = mysqli_query($conn,"SELECT * FROM pay ");
        ?>
    
        <?php

        if (mysqli_num_rows($result) > 0) {
        ?>
        <center>
        <table  class="content-table">
  
            <tr>
	            <td>Payment Id</td>
                <td>Person Name</td>
                <td>Card Number</td>
                <td>Expiry</td>
                <td>CVV/CVC</td>
                <td>Action</td>
            </tr>
        <?php
        $i=0;
        while($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $row["paymentid"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["no"]; ?></td>
	            <td><?php echo $row["date"]; ?></td>
                <td><?php echo $row["cvv"]; ?></td>
                <td><button class="button"><a href="delete_process.php?paymentid=<?php echo $row["paymentid"]; ?>">cancle</a></button></td>
                
            </tr>
        <?php
        $i++;
        }
        ?>
        </table>
    </center>
        <?php
        }
        else{
            echo "No result found";
            }
        ?>
        <!--</body>
        </html>-->
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
       
    </body>
</html>