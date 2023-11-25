<?php

/**********************************************
 *       show-movies.php
 *       Visa alla filmer i en Bootstrap-grid
 * 
 **********************************************/

// Skapa anslutning
require_once 'db.php';

// SQL-fråga för att hämta data
$sql = "SELECT * FROM films";

// Utför frågan
$result = $db->query($sql);

// Kontrollera om det finns resultat
if ($db->query($sql)) {
  // Hämta alla rader som en array
  $movies = $result->fetch_all(MYSQLI_ASSOC);
  // print_r($movies);
} else {
  die( $db->error );
}

// Iterera över alla filmer
foreach ($movies as $movie) {

  // Hämta data om varje film
  $id    = $movie['id'];
  $title = $movie['title'];
  $price = $movie['price'];
  $image = $movie['image'];

  // Visa filmer
  require 'show-movie.php';
  
} 

?>