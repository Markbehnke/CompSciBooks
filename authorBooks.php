

<head><link href="css/indexCss.css" rel="stylesheet" type="text/css"></head>
<div class="header">
  <a href="index.php" class="logo">CompSci-Books-4-You</a><img src="img/logo.jpg" height="62" width="62">
  <div class="header-right">
    <a class="active" href="index.php">Home</a>
    <a href='contact.php'>Contact</a>
  </div>
</div>
    


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


$lastName = $_GET['id'];
$sql = "SELECT *
FROM bookauthors INNER JOIN bookauthorsbooks  ON bookauthors.AuthorID = bookauthorsbooks.AuthorID
INNER JOIN bookdescriptions ON bookauthorsbooks.ISBN = bookdescriptions.ISBN WHERE bookauthors.nameL = '$lastName'";

$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
    $firstName = $row['nameF'];
    $isbn = $row['ISBN'];
     $imgMed = "<img src ='img/$isbn.MED.jpg'";
    echo $imgMed .$row['ISBN'] . " ". $row['title'] . " " . shortenDesc($row['description']) . "... $" . $row['price'] . "<br/>";
  
    
}


echo "Books made by " . $firstName . " " . $lastName;
echo "<br>";
    

function shortenDesc($text){

    return $text = substr($text, 0, 100);
}

?>


<html>
<footer class="header">
        <p>Made By: Mark Behnke </p>    <p>Contact information:<a href="mailto:mark.behnke1998@gmail.com">Mark.behnke1998@gmail.com</a> <br><a href ="contact.php">Contact Us</a></p>
  
</footer>
</html>