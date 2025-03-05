<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="register-body">

    <nav>
        <img src="./files/logo6.png" class="logo" alt="Logo" title="FirstFlight Travels">

        <ul class="navbar">
            <li>
                <a href="./index.html">Home</a>
                <a href="./index.html#locations">Locations</a>
                <a href="./index.html#package">Packages</a>
                <a href="./about.html">About Us</a>
                <a href="./contact.html">Contact Us</a>
            </li>
        </ul>
    </nav>

<section class="registration">
        <div class="register-form">
            <h1>Register Here</span></h1><br>
      
            <form action="register.php" method="POST"  onsubmit="return validateform()">
            <input type="text" name="Name" placeholder="Name" id="name" required>
            <input type="email" name="Email" placeholder="Email-Id" id="" required><br>
	<input type="tel" name="Phoneno" placeholder="Phone No." id="Phoneno" required>
            <input type="number" name="Age" placeholder="Age" id="" required>
	<h3>Gender :-</h3><br>
            <input type="radio" name="Gender"  value="male">male 
            <input type="radio" name="Gender" value="female"> female
		<h3>Departure :-</h3><br>
            <input type="datetime-local" name="Departure" id="" value="Departure">
            <h3>Return :-</h3><br>
            <input type="datetime-local" name="Rdate" id="" value="Rdate">
	  <h3>Travel Destination</h3><br>
	<input type="checkbox" name="TravelDestination[]" value="Kashmir">Kashmir &nbsp; &nbsp; &nbsp;
        <input type="checkbox" name="TravelDestination[]" value="Istanbul">Istanbul &nbsp; &nbsp; &nbsp;
	<input type="checkbox" name="TravelDestination[]" value="Paris">Paris &nbsp; &nbsp; &nbsp;
	<input type="checkbox" name="TravelDestination[]" value="Bali">Bali &nbsp; &nbsp; &nbsp;
        <input type="checkbox" name="TravelDestination[]" value="Dubai">Dubai &nbsp; &nbsp; &nbsp;
        <input type="checkbox" name="TravelDestination[]" value="Geneva">Geneva &nbsp; &nbsp; &nbsp;<br>
	<input type="checkbox" name="TravelDestination[]" value="Port Blair">Port Blair &nbsp; &nbsp; &nbsp;
	<input type="checkbox" name="TravelDestination[]" value=" Rome">Rome &nbsp; &nbsp; &nbsp;
	<input type="checkbox" name="TravelDestination[]" value="Santorini">Santorini &nbsp; &nbsp; &nbsp;
        <input type="checkbox" name="TravelDestination[]" value="Tulum">Tulum &nbsp; &nbsp; &nbsp;
	<input type="checkbox" name="TravelDestination[]" value="Tasmania">Tasmania &nbsp; &nbsp; &nbsp;
	<input type="checkbox" name="TravelDestination[]" value="Rio de Janeiro">Rio de janerio &nbsp; &nbsp; &nbsp;
            
	 <h3>Package :-</h3><br>
            <input type="radio" name="Package" id="loc1" value="Cheapest" required>Cheapest &nbsp; &nbsp; &nbsp;
            <input type="radio" name="Package" id="loc1" value="Bronze"> Bronze &nbsp; &nbsp; &nbsp;
            <input type="radio" name="Package" id="loc1" value="Silver"> Silver &nbsp; &nbsp; &nbsp;
            <input type="radio" name="Package" id="loc1" value="Gold"> Gold &nbsp; &nbsp; &nbsp;<br>
	    <input type="radio" name="Package" id="loc1" value="Platinum"> Platinum &nbsp; &nbsp; &nbsp;                    	
	    <input type="radio" name="Package" id="loc1" value="Diamond"> Diamond &nbsp; &nbsp; &nbsp;
	    <input type="radio" name="Package" id="loc1" value="Diamond++"> Diamond++ &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  	    
            <input type="submit" name="submit" value="submit" class="submitbtn">
 </form>
        </div>
    </section>

<section class="footer">
    <div class="foot">
        <div class="footer-content">          
            <div class="footlinks">
                <h4>Quick Links</h4>
                <ul>
  
		    <li><a href="./locations.html">location</a></li>
                    <li><a href="./about.html">About Us</a></li>
                    <li><a href="./contact.html">Contact Us</a></li>
                </ul>
            </div>
         </div>
    </div>

    <div class="end">
        <p>Copyright © 2024 Firstflight Travels All Rights Reserved.<br>Website developed by:drashti vadukiya , devanshi dodiya , girija padmani</p>
    </div>
</section>
</body>
</html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="vv";
$conn=mysqli_connect($servername, $username, $password, $dbname);
if($conn->connect_error)
{
die("Connection failed: " . $conn->connect_error);
}
echo"connected";

if(isset($_POST['submit']))
{
$Name=$_POST['Name'];
$Email=$_POST['Email'];
$Phoneno=$_POST['Phoneno'];
$Gender = isset($_POST['Gender']) ? $_POST['Gender'] : '';
$Age=$_POST['Age'];
$Departure=$_POST['Departure'];
$Rdate=$_POST['Rdate'];
$TravelDestination=isset($_POST['TravelDestination']) ? $_POST['TravelDestination']:'';
$chk="";
foreach($TravelDestination as $chk1)
{
$chk.=$chk1.",";
}
$Package=$_POST['Package'];
$sql="INSERT INTO `dd`(`Name`,`Email`,`Phoneno`,`Gender`,`Age`,`Departure`,`Rdate`,`TravelDestination`,`Package`)VALUES('$Name','$Email','$Phoneno','$Gender','$Age','$Departure','$Rdate','$chk','$Package')";
if($conn->query($sql)==true)
{
echo'<script>alert("new record added")</script>';
}
else
{
echo'<script>alert("not success")</script>';
}
}
?>
