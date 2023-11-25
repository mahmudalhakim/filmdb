<?php 

// Skapa en anslutning till MySQL-databasen
$db = new mysqli("localhost", "root", "root", "filmdb");

// Kontrollera anslutningen
if ($db->connect_error){
    echo "Failed to connect to MySQL";
    die();
} 

// SQL-fråga för att hämta data
$sql = "SELECT * FROM films";

// Utför frågan
$result = $db->query($sql);

// Kontrollera om det finns resultat
if ($result) {
    // Hämta alla rader som en array
    $movies = $result->fetch_all(MYSQLI_ASSOC);
    // print_r($movies);
} else {
    die( $db->error );
}


// Iterera över alla filmer
foreach ($movies as $movie) {

  // Visa filmer
  echo "<h2>$movie[title]</h2>";
  echo "<img src='images/$movie[image]'>";
  echo "<h3>Pris: $movie[price] Kr</h3>";
  echo "<a href='order.php?id=$movie[id]'>Köp</a>";

}

?>