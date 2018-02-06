<?php 	
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "books";


if(ISSET($_POST['submit'])){
    
    $title =$_POST['title'];
    $pages =$_POST['pages'];
    $author =$_POST['author'];
    $year =$_POST['year'];
    
    
    
    $conn = new mysqli("localhost","root","","books") or die (mysqli_error());
    $query = $conn -> query ("INSERT INTO book (title, pages, author, year) VALUES ('$title', '$pages', '$author', '$year')") or die
        (mysqli_error());
            $conn->close();
    
}


?>