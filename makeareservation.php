<!DOCTYPE html>
<html>
<head>
<title> Make a reservation </title>
<link rel="icon" href="icon.png" sizes="256x256" type="image/png"> 

<link href="style.css" rel="stylesheet" type="text/css">

<style>
body {
  margin: 0;
  background-color: black;
  color: white;
}

   .button {
  font-family: georgia, serif;
  display: inline-block;
  border-radius: 4px;
  background-color: black; 
  border: 0.25px solid white;
  box-shadow: 4px 4px 5px red;
  color: white;
  text-align: center;
  font-size: 18px;
  padding: 15px;
  width: 180px;
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
  content: '\276F\276F';
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

div.bbody {
  width: 500px;
  margin: 0 auto;
  padding: 50px;
   font-family: georgia, serif;
}

div.elem-group {
  margin: 20px 0;
}
div.radio{
	
}

label {
  display: block;
  font-family: georgia, serif;
  padding-bottom: 10px;
  font-size: 1.25em;
}

input, select {
  border-radius: 2px;
  border: 2px solid #777;
  box-sizing: border-box;
  font-size: 1.25em;
  font-family: georgia, serif;
  width: 100%;
  padding: 10px;
}


hr {
  border: 1px dotted #ccc;
}




</style>

</head>

<body>

<div id="navbar">
  <a href="#home"><a href='index.html' title='Home'>Home</a></a>
  <a href="#movies"><a href='movies.html' title='Movies'>Movies</a></a>
  <a href="#upcomingmovies"><a href='upcomingmovies.html' title='Upcoming Movies'>Upcoming Movies</a></a>
  <a href="#schedule"><a href='schedule.html' title='Schedule'>Schedule</a></a>
  <a href="#booking"><a href='makeareservation.php' title='Make a reservation'>Make a reservation</a></a>
 </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h1><pers1><div style="text-align:center; font-size: 50pt;">Book a ticket!</div></pers1></h1> 


<div class="bbody">
<form method="post">
  <div class="elem-group">
    <label for="name">Your Name</label>
    <input type="text" id="name" name="name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,50} required>
  </div>
  <div class="elem-group">
    <label for="email">Your E-mail</label>
    <input type="email" id="email" name="email" placeholder="johndoe@email.com" required>
  </div>
  <div class="elem-group">
    <label for="phone">Your Phone</label>
    <input type="text" id="phone" name="phone" placeholder="0725348387" pattern=[0-9]{10} required>
  </div>
  <hr>
  
  <div class="elem-group">
    <label for="movie">Select Movie</label>
    <select id="movie" name="movie" required>
        <option>Choose a movie from the list</option>
        <option value="Luca">Luca</option>
        <option value="The Boss Baby: Family Business">The Boss Baby: Family Business</option>
        <option value="No Time To Die">No Time To Die</option>
		<option value="The Addams Family 2">The Addams Family 2</option>
        <option value="Persian Lessons">Persian Lessons</option>
        <option value="Venom: Let There Be Carnage">Venom: Let There Be Carnage</option>
        <option value="The Last Duel">The Last Duel</option>
        <option value="The Ladder">The Ladder</option>
        <option value="Dune">Dune</option>
        <option value="Ron's Gone Wrong">Ron's Gone Wrong</option>
		<option value="Halloween Kills">Halloween Kills</option>
		<option value="Eternals">Eternals</option>
		<option value="Last Night in Soho">Last Night in Soho</option>
        <option value="Antlers">Antlers</option>
        <option value="Monster Family 2">Monster Family 2</option>
    </select>
  </div> 
  
  
  <div class="elem-group">
    <label for="date">Select Date&Time</label>
    <select id="date" name="date" required>
        <option>Choose the date and time</option>
		<option>--------------------------------------------------</option>
		<option>Luca</option>
		
        <option value="29.11.2021 at 5:30pm">29.11.2021 at 5:30pm</option>
		<option value="29.11.2021 at 7:30pm">29.11.2021 at 7:30pm</option>
		<option value="29.11.2021 at 9:00pm">29.11.2021 at 9:00pm</option>
		<option value="30.11.2021 at 5:30pm">30.11.2021 at 5:30pm</option>
		<option value="03.12.2021 at 6:00pm">03.12.2021 at 6:00pm</option>
		<option value="03.12.2021 at 9:00pm">03.12.2021 at 9:00pm</option>
		<option value="05.12.2021 at 6:30pm">05.12.2021 at 6:30pm</option>
		<option value="05.12.2021 at 8:00pm">05.12.2021 at 8:00pm</option>
		<option>--------------------------------------------------</option>
        <option>The Boss Baby: Family Business</option>
		
		<option value="30.11.2021 at 9:00pm">30.11.2021 at 9:00pm</option>
		<option value="01.12.2021 at 5:30pm">01.12.2021 at 5:30pm</option>
		<option value="01.12.2021 at 9:00pm">01.12.2021 at 9:00pm</option>
		<option value="02.12.2021 at 5:30pm">02.12.2021 at 5:30pm</option>
		<option value="02.12.2021 at 7:30pm">02.12.2021 at 7:30pm</option>
		<option value="05.12.2021 at 4:00pm">05.12.2021 at 4:00pm</option>
		<option value="05.12.2021 at 5:30pm">05.12.2021 at 5:30pm</option>
		<option value="05.12.2021 at 9:00pm">05.12.2021 at 9:00pm</option>
		
		<option>--------------------------------------------------</option>
        <option>No Time To Die</option>
		
		<option value="03.12.2021 at 5:30pm">03.12.2021 at 5:30pm</option>
		<option value="03.12.2021 at 7:30pm">03.12.2021 at 7:30pm</option>
		<option value="03.12.2021 at 9:00pm">03.12.2021 at 9:00pm</option>
		<option value="04.12.2021 at 8:00pm">04.12.2021 at 8:00pm</option>
		<option>--------------------------------------------------</option>
		<option>The Addams Family 2</option>
		
		 <option value="29.11.2021 at 4:30pm">29.11.2021 at 4:30pm</option>
		 <option value="29.11.2021 at 6:00pm">29.11.2021 at 6:00pm</option>
		 <option value="29.11.2021 at 7:30pm">29.11.2021 at 7:30pm</option>
		 <option value="29.11.2021 at 9:00pm">29.11.2021 at 9:00pm</option>
		<option>--------------------------------------------------</option>
        <option>Persian Lessons</option>
		
		<option value="29.11.2021 at 4:30pm">29.11.2021 at 4:30pm</option>
		<option value="29.11.2021 at 6:00pm">29.11.2021 at 6:00pm</option>
		<option value="29.11.2021 at 7:30pm">29.11.2021 at 7:30pm</option>
		<option value="29.11.2021 at 9:00pm">29.11.2021 at 9:00pm</option>
		<option value="30.11.2021 at 4:30pm">30.11.2021 at 4:30pm</option>
		<option value="30.11.2021 at 9:00pm">30.11.2021 at 9:00pm</option>
		<option>--------------------------------------------------</option>
        <option>Venom: Let There Be Carnage</option>
		
		<option value="29.11.2021 at 7:30pm">29.11.2021 at 7:30pm</option>
		<option value="29.11.2021 at 9:00pm">29.11.2021 at 9:00pm</option>
		<option value="30.11.2021 at 7:30pm">30.11.2021 at 7:30pm</option>
		<option value="30.11.2021 at 9:00pm">30.11.2021 at 9:00pm</option>
		<option value="01.12.2021 at 7:30pm">01.12.2021 at 7:30pm</option>
		<option value="01.12.2021 at 9:00pm">01.12.2021 at 9:00pm</option>
		<option value="02.12.2021 at 7:30pm">02.12.2021 at 7:30pm</option>
		<option value="02.12.2021 at 9:00pm">02.12.2021 at 9:00pm</option>
		<option value="03.12.2021 at 7:30pm">03.12.2021 at 7:30pm</option>
		<option value="03.12.2021 at 9:00pm">03.12.2021 at 9:00pm</option>
		<option value="04.12.2021 at 7:30pm">04.12.2021 at 7:30pm</option>
		<option value="04.12.2021 at 9:00pm">04.12.2021 at 9:00pm</option>
		<option value="05.12.2021 at 7:30pm">05.12.2021 at 7:30pm</option>
		<option value="05.12.2021 at 9:00pm">05.12.2021 at 9:00pm</option>
		<option>--------------------------------------------------</option>
        <option>The Last Duel</option>
		
		<option value="29.11.2021 at 7:30pm">29.11.2021 at 7:30pm</option>
		<option value="29.11.2021 at 9:00pm">29.11.2021 at 9:00pm</option>
		<option value="05.12.2021 at 6:00pm">05.12.2021 at 6:00pm</option>
		<option value="05.12.2021 at 7:30pm">05.12.2021 at 7:30pm</option>
		<option value="05.12.2021 at 9:00pm">05.12.2021 at 9:00pm</option>
		<option>--------------------------------------------------</option>
        <option>The Ladder</option>
		
		<option value="03.12.2021 at 9:00pm">03.12.2021 at 9:00pm</option>
		<option value="04.12.2021 at 6:00pm">04.12.2021 at 6:00pm</option>
		<option value="04.12.2021 at 9:00pm">04.12.2021 at 9:00pm</option>
		<option value="05.12.2021 at 9:00pm">05.12.2021 at 9:00pm</option>
		<option>--------------------------------------------------</option>
        <option>Dune</option>
		
		<option value="03.12.2021 at 4:30pm">03.12.2021 at 4:30pm</option>
		<option value="03.12.2021 at 6:00pm">03.12.2021 at 6:00pm</option>
		<option value="03.12.2021 at 7:30pm">03.12.2021 at 7:30pm</option>
		<option value="03.12.2021 at 9:00pm">03.12.2021 at 9:00pm</option>
		<option value="04.12.2021 at 4:30pm">04.12.2021 at 4:30pm</option>
		<option value="04.12.2021 at 6:00pm">04.12.2021 at 6:00pm</option>
		<option value="04.12.2021 at 9:00pm">04.12.2021 at 9:00pm</option>
		<option>--------------------------------------------------</option>
        <option>Ron's Gone Wrong</option>
		
		<option value="05.12.2021 at 4:30pm">05.12.2021 at 4:30pm</option>
		<option value="05.12.2021 at 6:00pm">05.12.2021 at 6:00pm</option>
		<option>--------------------------------------------------</option>
		<option>Halloween Kills</option>
		
		<option value="03.12.2021 at 4:30pm">03.12.2021 at 4:30pm</option>
		<option value="03.12.2021 at 6:00pm">03.12.2021 at 6:00pm</option>
		<option value="03.12.2021 at 7:30pm">03.12.2021 at 7:30pm</option>
		<option value="03.12.2021 at 9:00pm">03.12.2021 at 9:00pm</option>
		<option>--------------------------------------------------</option>
		<option>Eternals</option>
		
		<option value="02.12.2021 at 5:30pm">02.12.2021 at 5:30pm</option>
		<option value="02.12.2021 at 9:00pm">02.12.2021 at 9:00pm</option>
		<option value="03.12.2021 at 7:30pm">03.12.2021 at 7:30pm</option>
		<option value="03.12.2021 at 9:00pm">03.12.2021 at 9:00pm</option>
		<option>--------------------------------------------------</option>
		<option value="Last Night in Soho">Last Night in Soho</option>
		
		<option value="04.12.2021 at 9:00pm">04.12.2021 at 9:00pm</option>
		<option>--------------------------------------------------</option>
        <option>Antlers</option>
		
		<option value="29.11.2021 at 5:00pm">29.11.2021 at 5:00pm</option>
		<option>--------------------------------------------------</option>
        <option>Monster Family 2</option>
		
		<option value="01.12.2021 at 6:00pm">01.12.2021 at 6:00pm</option>
		<option value="01.12.2021 at 7:30pm">01.12.2021 at 7:30pm</option>
		<option value="01.12.2021 at 9:00pm">01.12.2021 at 9:00pm</option>
		<option>--------------------------------------------------</option>
    </select>
  </div> 
  
  <div class="elem-group">
    <label for="number">How many tickets do you want to reserve?</label>
    <input type="number" id="number" name="number" placeholder="1" min="1" max="5" required>
  </div>


<button class="button" type="submit"><span>Submit</span></button>
</form>
</div>



<button class=scrollToTopBtn>&#8648;</button>

<div style="box-shadow: 0px -1px 10px white;"><footer>

<div class="row">
  <div class="column" style="background-color:black;">
    <p>Tel.: 0725 089 123</p>
	<p>E-mail: home.cinema@gmail.com</p>
	
  </div>
  <div class="column" style="background-color:black;">
    <p>The cinema is open everyday from 10:00 to 22:00.</p>
	<p>Address: Piata Consiliul Europei 2, Timisoara, Romania</p>
  </div>
  <div class="column" style="background-color:black;">
   
	<p>If you want to be part of our team send an e-mail at: </p>
	<p>home.cinema@gmail.com</p>
  </div>
</div>

</footer></div>

</div>

<script type="text/javascript" src="scrolltotop.js"></script>


</body>

</html>

<?php


$conn = mysqli_connect('localhost', 'root', '','db_connect');

if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$movie = $_REQUEST['movie'];
$date = $_REQUEST['date'];
$number = $_REQUEST['number']; 

$sql = "INSERT INTO reservation VALUES('0', '$name', '$email',
 '$phone', '$movie', '$date', '$number')";

  
        if(mysqli_query($conn, $sql)){
            echo ""; 
  
            
        } else{
            echo "Oops! An error occured. " 
                . mysqli_error($conn);
        }
          
}
        mysqli_close($conn);

?>


