<!DOCTYPE php>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Occupied Flooring</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/normalize.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/ocs.css">
  
  <?php
  error_reporting(E_ALL);
  ini_set("display errors", "On");
  // Err Values
  $firstnameErr = $lastnameErr = $companyErr = $emailErr = $messageErr = "";
  // form variables
  $firstname = $lastname = $company = $email = $reason = $message = "";
  // display after submitting
  $formDisplay = "";
  // test if validation passes
  $validationPass = true;
  
  //clean inputs
  function test_input($data) {
  	$data = trim($data);
	$data = stripslashes($data);
  	$data = htmlspecialchars($data);
  	return $data;
  }
  
  //form validation
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  	if (empty($_POST["firstname"])) {
  		$firstnameErr = "First name is required";
  		$validationPass = false;
  	} else {
  		$firstname = test_input($_POST["firstname"]);
  	}

  	if (empty($_POST["lastname"])) {
  		$lastnameErr = "Last name is required";
  		$validationPass = false;
  	} else {
  		$lastname = test_input($_POST["lastname"]);
  	}

  	if (empty($_POST["company"])) {
  		$companyeErr = "Company is required";
  		$validationPass = false;
  	} else {
  		$company = test_input($_POST["company"]);
  	}

  	if (empty($_POST["email"])) {
  		$emailErr = "Email is required";
  		$validationPass = false; 
      } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
  		$emailErr = "Enter a valid email";
  		$validationPass = false;
  	  } 
    } else {
  		$email = test_input($_POST["email"]);
  	}

  	$reason = test_input($_POST["reason"]);
  	
  	if (empty($_POST["message"])) {
  		$messageErr = "Message is required";
  		$validationPass = false;
  	} else {
  		$message = test_input($_POST["message"]);
  	}
  
  
  
  ?>
  
  <style>
     {outline:1px solid red;}
   
    </style>
</head>
<body>

  <div class="topnav" id="myTopnav">
    <!-- ITEM 1 -->

    <!-- ITEM 2 -->
    <div id="myLinks">
        <a href="index.html" class="active"><h1>Occupied Flooring Solutions</h1><img src="images/OccupiedFlooringLogo2024Rev.png" alt="Occupied Flooring Solutions logo"></a>
        <a href="services.html">Services</a>
        <a href="process.html">Process</a>
        <a href="progbenefit.html">Program Benefits</a>
        <a href="clients.html">Clients</a>
        <a href="contact.html">Contact</a>
    </div><!-- end myLinks -->
    <!-- ITEM 3 -->
    <a href="javascript:void(0);" class="icon" onclick="myFunction()" aria-label="click for navigation dropdown">
        <i class="fa fa-bars"></i>
    </a>
  </div>

  <div class="headImage">
  </div>

  <div class="wrapper">
    <main>
      <h2>Contact</h2>
      <h3>Let’s Plan Your Project with Precision</h3>

      <p>Whether you are managing a single occupied renovation or a national flooring program, OFS provides the planning discipline, execution control, and reporting transparency required for success.</p>
      <p>Contact us today to discuss your project and objectives.</p>

      <form action="mailto:sample@sample.com" method="post"  enctype="multipart/form-data">
			<!-- NAME -->
			<input type="text" name="firstname" required autofocus placeholder="First Name*"> <!-- name must be unique; required is required to send form; autofocus means cursor is active in this field when page is open; placeholder is gray text in form field.
 -->
 			<span class="error"><?php echo $firstnameErr ?></span>
			<input type="text" name="lastname" required placeholder="Last Name*">
 			<span class="error"><?php echo $lastnameErr ?></span>
	      	<input type="text" name="company" required placeholder="Company*">
			<!-- EMAIL -->
 			<span class="error"><?php echo $companyErr ?></span>
			<input type="email" name="email" required placeholder="Email*">
			<p class="hilight">* is required</p>
			<span class="error"><?php echo $emailErr ?></span>


			<!-- REASON FOR EMAIL -->
			<p>I'm looking for:</p>
			<select name="reason">
				<option value="Project Management">Project Management</option>
				<option value="newsletter">Newsletter</option>
				<option value="other">Other Reason</option>
				<option value="web">Website Error</option>
			</select>

			<!-- MESSAGE -->
			<textarea name="message" cols="45" rows="6" placeholder="Message*"></textarea>
			 <span class="error"><?php echo $messageErr ?></span>


			<!-- BUTTONS.-->
			<button type="submit" value="submit">Submit</button>
			<button type="reset" value="reset">Reset</button>

      </form>
    </main>

  </div> <!--end wrapper-->
  <footer>
    <p>© 2026 Occupied Flooring Solutions LLC. All Rights Reserved.</p>
  </footer>

  <script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
</script>

</body>
</html>
