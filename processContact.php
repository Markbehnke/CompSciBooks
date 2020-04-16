<head>  <link href="css/indexCss.css" rel="stylesheet" type="text/css"></head>

<html>
<body>
    
            <div class="header">
  <a href="index.php" class="logo">CompSci-Books-4-You</a><img src="img/logo.jpg" height="62" width="62">
  <div class="header-right">
    <a class="active" href="index.php">Home</a>
    <a href='contact.php'>Contact</a>
  </div>
</div>
<br><br>
Thank you <?php echo $_POST["firstname"] . " " . $_POST["lastname"]; ?>. We have sent a confirmation email to <?php echo $_POST["mail"]?><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


</body>
    
    
<footer class="header">
        <p>Made By: Mark Behnke </p>    <p>Contact information:<a href="mailto:mark.behnke1998@gmail.com">Mark.behnke1998@gmail.com</a> <br><a href ="contact.php">Contact Us</a></p>
  
</footer>
</html>