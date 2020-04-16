


 <div class="header-right">
    <a class="active" href="index.php">Home</a>
      <a href='contact.php'>Contact</a>
 </div>

<?php
$servername = "cosc499.ok.ubc.ca";
$username = "WebUser";
$password = "9UcM0QQcK1BwAXLk";
$database = "db_project";
$count = 0;
    

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$browse = $_GET['id'];
 $sql = "SELECT * FROM bookcategories INNER JOIN bookcategoriesbooks ON bookcategories.CategoryID = bookcategoriesbooks.CategoryID INNER JOIN bookdescriptions ON bookdescriptions.ISBN = bookcategoriesbooks.ISBN WHERE bookcategories.CategoryName = '$browse'";
    lookUp($sql);


function shortenDesc($text){

    return $text = substr($text, 0, 100);
}

function lookUp($sql){
    global $count;
    global $conn;
   $result = mysqli_query($conn, $sql);
   echo "<table border='5px'><tr><th>Price</th><th>Title</th><th>Description</th><th>Picture</th></tr>";
while($row = mysqli_fetch_assoc($result)){
    $count++;
    
    $isbn = $row['ISBN'];
    $img = "<img src='img/$isbn.THUMB.jpg'";
  echo  "<tr><td>$". $row['price'] . "</td><td><a href='product.php?id=" . $row['title'] . "'>" . "". $row['title'] . "</td></a>" ."<td>" . shortenDesc($row['description']) . "...</td>"." <td>" . $img . "</td></tr>";

echo "<br/>"; 
    
}
    echo "Number of items: " . $count;
    echo "</table>";
    
}



    ?>
    
  
    
    