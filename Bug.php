<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="Feedback.css">
</head>

<body>
<header>
  <a href="UserMainPage.php"><img src="plogo.png" alt="Logo" class="logo"></a>
  <div class="name">Park Finder</div>
  <p></p>
  <div class="Right">
  <a href="UserMainPage.php"><img src="announcement.png" width="30px" height="30px" alt="announcement" class="announcement"></a>
    <div class="headM"><a href="Download.php">Download</a></div>
    <div class="headM" id="GetHelp"> <a href="GetHelp.php">For Devlopers</a>
      <div class="dropM">
        <div class="headM"><a href="AskUS.php">Join Us!</a></div>
        <div class="headM"><a href="Bug.php">Our Community</a></div>
      </div>
    </div>
     <div class="headM" id="GetHelp"><a href="GetHelp.php">Get Help</a>
      <div class="dropM">
        <div class="headM"><a href="AskUS.php">Ask Us</a></div>
        <div class="headM"><a href="Bug.php">Bug Report</a></div>
        <div class="headM"><a href="Feedback.php">Feedback</a></div>
        <div class="headM"><a href="Documentation.php">Documentation</a></div>
      </div>
    </div>
    <div class="headM" id="GetHelp"><a href="GetHelp.php">About Us</a>
      <div class="dropM">
        <div class="headM"><a href="AskUS.php">Who are we?</a></div>
        <div class="headM"><a href="AskUS.php">FAQ</a></div>
        <div class="headM"><a href="AskUS.php">Licenses</a></div>
      </div>
    </div>
  </div>
</header>
<main><br>
    <div class="First">
      <div class="MLeft">
         <h2>Create a Bug Report</h2>
          <p class="MainP">Having a specific problem, like a software crash or sluggish behavior after an upgrade?
         <br>We welcome you to report it here so we can address it promptly and improve our service.</p><br>
      </div>
       <div class="MRight"><img src="BUG.png" width="180px" height="180px"/></div>
     </div><hr><br>
    <div class="Feedback">
        <form>
        <p>Bug Title:</p>
            <input type="text" id="Subject" placeholder="Enter Your Subject"><br>
            <p>Reporter:</p>
            <input type="text" id="Name" placeholder="Name"><br>
            <input type="text" id="Email" placeholder="Email"><br>
            <input type="text" id="Email" placeholder="Phone Number"><br>
            <p>Submit Date:</p> 
            <input type="text" id="Date" placeholder="DD/MM/YYYY"><br>
            <p>Browser:</p> 
            <input type="text" id="Browser" placeholder="Browser"><br>
            <p>URL:</p> 
            <input type="text" id="URL" placeholder="https://xxx"><br>
            <p>Description:</p>
            <textarea name="Enter Your Message" rows="10" cols="50" ></textarea><br>
            <br><input type="submit" id="sb"value="Submit" placeholder="Submit">
        </form>
    </div>


</main>
</body>

</html>
