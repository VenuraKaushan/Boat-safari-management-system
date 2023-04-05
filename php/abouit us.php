<!DOCTYPE html>
<html>
    <head>
        <!--link css-->
        <link rel = "styleSheet" href = "../css/nearLake.css">

        <title>
            Boat Safari Cruise
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
        <div class="cont">
            <div class="mid-cols">
                <h2>About Us</h2>
                <table border="1">
                    <tr>
                        <th>
                            Our Boat Safari Trip Management System Website is mainly focused on foreign 
                            tourists. Not only foreign tourists but also Local tourists are welcome to Our 
                            System. We do our best services for the customer. We have tried to come up with 
                            different budgets for foreign and local tourists in separate sections. We have also 
                            determined to upstate our service through this website to become more familiar 
                            with our customers and to give them offers which our company is preparing from 
                            time to time. Once you have landed on our website, you will see a guidance on how 
                            to be prepared before going on a boat trip. Our main ambition is to ease the minds 
                            and give a good relaxation to the tourists during these stressful Pandemic Situation.
                        </th>
                    </tr>
                </table>
            </div>

            <!-- comment box -->
            <div class="mid-cols">
                <center>
                <form>
                    <label for="comment"><h2>Add Your Comments</h2></label><br>
                    <input type="text" class = "drop" id="comment" name="comment" value="">
                </form>
                </center>
            </div>

            <!-- GPS -->
            <div class="mid-cols">
                <center><h2>Search Us</h2>
                <a href="https://www.google.lk/maps?hl=en&tab=rl" ><img class="gps" src="../images/gps.jpg" alt="googleMap" width="50%"></a></center> 
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