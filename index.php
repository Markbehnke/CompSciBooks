<!DOCTYPE html>
<html>
    
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="css/indexCss.css" rel="stylesheet" type="text/css">
<style>
        
#more {display: none;}
        </style>    
    
    </head>
<body>
    
    <div class="header">
  <a href="index.php" class="logo">CompSci-Books-4-You</a><img src="img/logo.jpg" height="62" width="62">
  <div class="header-right">
    <a class="active" href="index.php">Home</a>
    <a href='contact.php'>Contact</a>
  </div>
</div>
    
    

    
    
<!-- You will need to adjust the action URL to use the correct port on your local machine -->
<form method="post" action="db_project.php" id="searchItems">
  Title Search:<br>
  <input type="text" name="title" id="title" >
  
  <br>
  Author Search:<br>
  <input type="text" name="author" id="author" onkeyup="search()">
    
      <ul id="stateList">
          <li>Jason Gilmore</li>
          <li>David Sklar</li>
          <li>Luke Welling</li>
          <li>Laura Thomson</li>
          <li>Steve Krug</li>
          <li>Ben Forta</li>
          <span id="dots">...</span><span id="more">
          <li>Jakob Neilsen</li>
          <li>Alan Beaulieu</li>
          <li>Jesse Liberty</li>
          <li>Dan Hurwitz</li>
          <li>Michele E. Davis</li>
          <li>John A. Phillips</li>
          <li>Jeffrey Friedl</li>
          <li>Michael J. Hernandez</li>
          <li>John L. Viescas</li>
          <li>Stephan Walther</li>
          <li>Andrew Watt</li>
          <li>Kevin Tatroe</li>
          <li>Rasmus Lerdorf</li>
          <li>Peter MacIntyre</li>
          <li>Matthew MacDonald</li>
          <li>Julian Templeman</li>
          <li>Hugh E. Williams</li>
          <li>David Lane</li>
          <li>Robin Nixon</li>
          <li>Ethan Brown</li>
          </span>
          
         <button onclick="myFunction()" id="myBtn" type="button">Read more</button>
          
          
</ul>
    
    
    <!--The AJAX portion, done in JavaScript, to give the user a list of authors to choose from. -->
    <script> function search() {
    var input, filter, ul, li, item, i, txtValue;
    input = document.getElementById("author");
    filter = input.value.toUpperCase();
    ul = document.getElementById("stateList");
    li = ul.getElementsByTagName("li");  
    for (i = 0; i < li.length; i++) {
    item = li[i];
    txtValue = item.textContent || item.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                    } else {
                            li[i].style.display = "none";
                }
  }
}
        
        
        //I found this code at: https://www.w3schools.com/howto/howto_js_read_more.asp. I modifed it slightly however.
        function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
    
    
    </script>
  <br>
  Category Search:<br>
  <input type="text" name="category" id="category">
 
  <br><br>
  <input type="Submit" id="submit" value="Search"><!-- Change to submit-->
    
    

</form>
    
    
    <div class="browse">
      <?php echo $timestamp = date('H:i:s');?>
    
        <p id="head">Browse</p>
        <p><a href='browse.php?id=ASP.NET'>ASP.NET</a></p>
        <p><a href='browse.php?id=JavaScript'>JavaScript</a></p>
        <p><a href='browse.php?id=MySQL'>MySQL</a></p>
        <p><a href='browse.php?id=PHP'>PHP</a></p>
        <p><a href='browse.php?id=Regular Expressions'>Regular Expressions</a></p>
        <p><a href='browse.php?id=SQL'>SQL</a></p>
        <p><a href='browse.php?id=Web Usability'>Web Usability</a></p>
        <form method="post" action="db_project.php" id="searchItems">
       <p>Search: <input type="text" name="title" id="title" ></p>
              <input type="Submit" id="submit" value="Search">
            
           
</form>
    
    </div>
    
    
    
    
    <div id="response"></div>
      <script>
        $(document).ready(function(){
            
            $('#submit').click(function(e){
                 
                e.preventDefault();
                var auth = $('#author').val();
                 var cat = $('#category').val();
                var title = $('#title').val();
                    
                    $.ajax({
                        type: "POST",
                        url: "db_project.php",
                        data: { category:cat, author:auth, title:title
                              
                              },
                        success: function(data){
                            $('#response').html(data.toString());
                        },
                        fail: function(data){
                            $('#response').html('There is an error!');
                        }
                    });
                
            });
        });
        </script>
    <footer class="header">
        <p>Made By: Mark Behnke </p>    <p>Contact information:<a href="mailto:mark.behnke1998@gmail.com">Mark.behnke1998@gmail.com</a> <br><a href ="contact.php">Contact Us</a></p><p>Address: 1337 Cascading-Style Street</p><p>Company Name: Books-4-u</p>
  
</footer>
    
</body>
