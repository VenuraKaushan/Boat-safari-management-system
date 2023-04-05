<!DOCTYPE html>
<html>
    <head>
        <!--link css-->
        <link rel = "styleSheet" href = "../css/nearLake.css">
        <link rel = "stylesheet" href="../css/homepage.css">

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
          
        <!-- Content -->
		<br>
		<br>
		<br>
		<br>
		<br>
		<center>
		<div class="animation">
		<div class="words word-1">
			<span>B</span>
			<span>O</span>
			<span>A</span>
			<span>T</span>
			
		</div>

		<div class="words word-2">
			<span>S</span>
			<span>A</span>
			<span>F</span>
			<span>A</span>
			<span>R</span>
			<span>I</span>
			
		</div>

		<div class="words word-3">
			<span>C</span>
			<span>R</span>
			<span>U</span>
			<span>I</span>
			<span>S</span>
			<span>E</span>
			
		</div>
        </div>
		</div>
		</center>
		
		<br><br>
		<br><br>
        <br><br><br>
        <div class="Content">

            <div class="mySlides fade">
              <div class="numbertext">1 / 5</div>
              <img src="../images/first.jpg" style="width:100%">
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">2 / 5</div>
              <img src="../images/second.jpg" style="width:100%">
            </div>
            
            <div class="mySlides fade">
              <div class="numbertext">3 / 5</div>
              <img src="../images/third.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 5</div>
                <img src="../images/5th.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">5 / 5</div>
                <img src="../images/6th.jpg" style="width:100%">
            </div>
            
            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>
            

            </div>
            <br>
				
            
            <!-- js for the slideshow -->
            <script>
            let slideIndex = 1;
            showSlides(slideIndex);
            
            function plusSlides(n) {
              showSlides(slideIndex += n);
            }
            
            function currentSlide(n) {
              showSlides(slideIndex = n);
            }
            
            function showSlides(n) {
              let i;
              let slides = document.getElementsByClassName("mySlides");
              let dots = document.getElementsByClassName("dot");
              if (n > slides.length) {slideIndex = 1}    
              if (n < 1) {slideIndex = slides.length}
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
            }
        
        </script>
		<p style="border:3px; border-style:solid; border-color:#000000; padding: 1em;">Boat safari at coastal lagoons in Sri Lanka is an unforgettable and inspiring ride through the mangrove swamps. Most of the Coastal lagoons scattered with small islands and natural landscapes provide tangled mangrove swamps are ideal sites for boat safari and bird watching.

Wonderful way to explore the real nature, relaxing & fun for the whole family is to take a Boat trip through Mangrove Tunnels, Swamps and grasslands in coastal lagoons such as Bentara, Madu River or Madampa Lake wild Life sanctuary in Sri Lanka allows guests to explore a different side of these lagoons and birds on the riverbank while you drift down some of the most scenic parts of Sri Lanka in a custom designed, comfortable and safe boat excursion.

Eco Culture boat tour begins with a brief introduction to the Biological Diversity and the centuries old cultures of the Lake and surroundings and safety equipment orientation. This very special boating trip that you will never forget, offers something different and special. While joining this boat ride our experience, boatmen briefing you on the flora and fauna around the lake. You can explore the mangroves looking for all types of wildlife available at this newly declared Wild life sanctuaries. (Monkeys, Bat Hooting sites, civet & Mongooses, River otter, iguanas, lizards, Crabs, Crocodiles, Snakes, many types of Birds, Butterflies & much more). The mangroves are a very amazing area to explore with their incredible root systems that grow above the water and spread out.

You can also experience how Water monitors either swimming placidly by the side of the boat, with flicking tongues or resting on trees. These Asian water monitor lizard, which today is one of the most readily accessible large reptiles on this planet - an animal which can be seen during boat excursion in Sri Lanka a memorable and unusual attraction.</p>
		
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