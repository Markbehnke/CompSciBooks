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







$categoryName = $_POST['category'];
$author = $_POST['author'];
$get = $_POST['title'];





if($get != null){
    
$sql = "SELECT * FROM bookdescriptions WHERE title LIKE '%$get%'";
lookUp($sql);
    

}else if($author != null){
    
    $arr = explode(' ',trim($author));
    $auth = $arr[count($arr) - 1];
    $sql = "SELECT *
    FROM bookauthors INNER JOIN bookauthorsbooks  ON bookauthors.AuthorID = bookauthorsbooks.AuthorID
    INNER JOIN bookdescriptions ON bookauthorsbooks.ISBN = bookdescriptions.ISBN WHERE bookauthors.nameL ='$auth'";
    lookUp($sql);
}else if($categoryName != null){
    $sql = "SELECT * FROM bookcategories INNER JOIN bookcategoriesbooks ON bookcategories.CategoryID = bookcategoriesbooks.CategoryID INNER JOIN bookdescriptions ON bookdescriptions.ISBN = bookcategoriesbooks.ISBN WHERE bookcategories.CategoryName = '$categoryName'";
    lookUp($sql);
    
}else{
    
}



function shortenDesc($text){

    return $text = substr($text, 0, 100);
}


function lookUp($sql){
    $count = 0;
    
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