<head>  <link href="css/indexCss.css" rel="stylesheet" type="text/css"></head>



<body>
    
            <div class="header">
  <a href="index.php" class="logo">CompSci-Books-4-You</a><img src="img/logo.jpg" height="62" width="62">
  <div class="header-right">
    <a class="active" href="index.php">Home</a>
    <a href='contact.php'>Contact</a>
  </div>
</div>
      

    
    
    
    
<div class="container">
  <form action="processContact.php" method="post">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      <label for="email">Email Address</label>
      <input type="text" id="email" name="mail" placeholder="Your Email Address.." onblur="validateEmail(this);"/>
      


    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
        <option value="newzealand">New Zealand</option>
    </select>

        <label for="postal">Postal Code</label>
      <input type="text" id="postal" placeholder="Your Postal Code..." onblur="validatePostal(this);"/>
       <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>


   
      <script>
                 //Checks the email for the correct sequence of characters. 
          function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
            alert('Invalid Email Address');
            return false;
        }

        return true;
            }
          
            //Checks the postal code for the correct sequence of characters
          function validatePostal(post){
              var reg = /^[ABCEGHJ-NPRSTVXY]\d[ABCEGHJ-NPRSTV-Z][ -]?\d[ABCEGHJ-NPRSTV-Z]\d$/i;
              if(reg.test(post.value) == false){
                  alert('Invalid Postal Code');
                  return false;
              }
              return true;
          }

</script>
    </body>

<footer class="header">
        <p>Made By: Mark Behnke </p>    <p>Contact information:<a href="mailto:mark.behnke1998@gmail.com">Mark.behnke1998@gmail.com</a> <br><a href ="contact.php">Contact Us</a></p>
  
</footer>