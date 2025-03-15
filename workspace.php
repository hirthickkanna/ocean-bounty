<?php 
//Databse Connection file
include('dbconnection.php');
if(isset($_POST['submit']))
  {
  	//getting the post values
    $fname=$_POST['fname'];
    $lname=$_POST['date'];
    $contno=$_POST['phoneno'];
    $email=$_POST['email'];
    $add=$_POST['address'];
    $gus=$_POST['guest'];
   
  // Query for data insertion
     $query=mysqli_query($con, "insert into tblusers(FirstName,date, phoneno, Email, Address,guest) value('$fname','$lname', '$contno', '$email', '$add','$gus' )");
    if ($query) {
    echo "<script>alert('You have successfully inserted the data');</script>";
    echo "<script type='text/javascript'> document.location ='workspace.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="workspace.css">
  <title>OCEANs BOUNTY</title>  
</head>
<body>
    
<div class="dropdown" style="float:left;"> 
  <div class="logo"><img src="ocean bounty.png"> <h1 class="e">𝓸𝓬𝓮𝓪𝓷 𝓫𝓸𝓾𝓷𝓽𝔂</h1>
  <button class="dropbtn">  
  <div class="dropdown-content" style="left:0;">
  <a href="#home">HOME</a></a></li>
  <a href="#menu">MENU</a></a></li>
  <a href="#contact">CONTACT</a></a></li>
  <a href="#reservations">RESERVATION<a></a></li>
 
  
  </div>
<nav> 
    <main>
		<section class id="home">
       
			<img src="ocean bounty.png" alt="logo">
		</section>
		<section>
            <p>A sea fish shop is a specialized retail store that offers a wide variety of fresh and frozen seafood, showcasing the ocean's bounty. 
                The display counters are often filled with an array of ocean delicacies, such as Redsnaper,Vulii,Catla,Kelanga,etc.
            </p>
		</section>
        </section>
        <section id="menu">
            <h2>Menu</h2>
            
                
			<div class="platter 4">
                <img src="redsnaper.jpg" alt="fish1">
				<p>Redsnaper</p>
                <p>Rs 350</p>
            </div>
                
			<div class="platter 5">
                <img src="vuli.jpg" alt="fish2">
				<p>Vulii</p>
                <p>Rs 400</p>
                
			</div>
			<div class="platter 6">
                <img src="catla.jpg" alt="catla">
				<p>Catla</p>
                <p>Rs 250</p>
                
			</div>
			<div class="platter 7">
                <img src="kelanga.jpg" alt="kelanga">
				<p>Kelanga</p>
                <p>Rs 250</p>
                
			</div>
			<div class="platter 8">
                <img src="crab.jpg" alt="crab">
				<p>Crab</p>
                <p>Rs 350</p>
                
			</div>
			<div class="platter 10">
                <img src="seer.jpg" alt="seer">
				<p>Seer</p>
                <p>Rs 750</p>

			</div>
			<div class="platter 11">
                <img src="pura.jpg" alt="pura">
				<p>Pura</p>
                <p>Rs 450</p>
                
			</div>
			<div class="platter 12">
                <img src="prawn.jpg" alt="Prawn">
				<p>Prawn</p>
                <p>Rs 450</p>
                
			</div>
			
            <button class="btn" onclick="Addtocart()" style="margin-left: 650px; width:200px; height:40px;"><a href="Order.html">Order now</a></button></li>			
        </section>
		</section>
		<section id="reservations">
            <h2>Booking</h2>
            <p>Book your table now by calling us at (+91) 8075679496 or by filling out the form below:</p>
            <form  method="post" enctype="multipart/form-data">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="fname" ><br>
                <!-- <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" ><br> -->
                <label for="phone">Phone:</label><br>
                <input type="tel" id="phone" name="phoneno" ><br>
                <label for="date">Date:</label><br>
                <input type="date" id="date" name="date" required><br>
                <label for="time">Time:</label><br>
                <input type="time" id="time" name="time" required><br>
                <!-- <label for="number">Number of Guests:</label><br>
                <input type="number" id="number" name="guest" min="1" max="10" required><br> -->
                <label>Address:</label><br>
                <textarea class="form-control" name="address" placeholder="Enter Your Address" required="true"></textarea><br>
                <input type="submit" value="Submit" name="submit">
                <div class="text-center">View Aready Inserted Data!!  <a href="index-1.php">View</a></div>

            </form>
        </section>
        <section id="contact">
            <h2>Contact Us</h2>
			<p>Solaihall road ,near shiva briyani ,dindigul</p>
			<p>oceanbounty@gmail.com</p>
			<p>8072679496</p>
        </section>
		</section>
		
    <footer>
        <p>&copy; 2024 FRUTTI DI MARE. All rights reserved.</p>
    </footer>
</body>
</html>
