<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Booking Form</title>
	<link rel="stylesheet" href="destination_style.css">
</head>
<body>
  <form method="post" action="process.php">
<div class="wrapper">
    <div class="title">
        Booking Form
    </div>
    <div class="form">
       <div class="inputfield">
          <label>Enter your Pickup Location</label>
        <input type="text" name="pickup_location" class="input">
       </div>  
        <div class="inputfield">
          <label>Enter your Destination Location</label>
          <input type="text"  name="destination_location" class="input">
       </div>  
       <div class="inputfield">
          <label>Check In</label>
          <input type="text"  name="check_in" class="input">
       </div>
       <div class="inputfield">
        <label>Check Out</label>
        <input type="text"  name="check_out" class="input">
     </div> 
     <div class="inputfield">
      <label>Duration</label>
      <input type="text"  name="duration" class="input">
   </div>
    <div class="inputfield">
    <label>Members</label>
    <input type="text"  name="members" class="input">
 </div>
      <div class="inputfield">
      <input type="submit" name="save" value="submit" class=btn>
      </div>
    </div>
</div>
</from>	
</body>
</html>