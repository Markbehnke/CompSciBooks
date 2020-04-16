<html>
<head>
     <link href="css/indexCss.css" rel="stylesheet" type="text/css">
</head>
<body>
     <div class="header">
  <a href="index.php" class="logo">CompSci-Books-4-You</a><img src="img/logo.jpg" height="62" width="62">
  <div class="header-right">
    <a class="active" href="index.php">Home</a>
    <a href='contact.php'>Contact</a>
  </div>
</div>

    </body>


</html>






<?php
$servername = "cosc499.ok.ubc.ca";
$username = "WebUser";
$password = "9UcM0QQcK1BwAXLk";
$database = "db_project";
    

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$title = $_GET['id'];

    
$sql = "SELECT * FROM bookdescriptions WHERE title LIKE '%$title%'";
$author = "SELECT *
FROM bookauthors INNER JOIN bookauthorsbooks  ON bookauthors.AuthorID = bookauthorsbooks.AuthorID
INNER JOIN bookdescriptions ON bookauthorsbooks.ISBN = bookdescriptions.ISBN WHERE bookdescriptions.title ='$title'";

$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
    $isbn = $row['ISBN'];
    $imgThumb = "<img src='img/$isbn.THUMB.jpg'";
    $imgMed = "<img src ='img/$isbn.MED.jpg'";
    echo  $imgMed . "<br/>". " " . "Price:  $" . $row['price'] ." ISBN: ". $isbn . " Publisher: ". $row['publisher']. " Publish Date: " .$row['pubdate']. "<br/> ". " Number of Pages: ". $row['pages']. " ed." .$row['edition']. " <br/>Description: " .  " ".$row['description'];


    }

//SELECT * FROM bookcategories a INNER JOIN bookcategoriesbooks b ON bookcategories.CategoryID = bookcategoriesbooks.CategoryID INNER JOIN bookdescriptions c ON bookdescriptions.ISBN = bookcategoriesbooks.ISBN WHERE bookcategories.CategoryID = 2


$result2 = mysqli_query($conn, $author);
    while($row2 = mysqli_fetch_assoc($result2)){
        echo  "Author: " . "<a href='authorBooks.php?id=" . $row2['nameL'] . "'>" . $row2['nameF'] ." ". $row2['nameL']. "</a>" ;

    }



?>

<html>

<footer class="header">
        <p>Made By: Mark Behnke </p>    <p>Contact information:<a href="mailto:mark.behnke1998@gmail.com">Mark.behnke1998@gmail.com</a> <br><a href ="contact.php">Contact Us</a></p>
  
</footer>
</html>