<?php

// Skapa en anslutning till MySQL-databasen
$db = new mysqli("localhost", "root", "root", "filmdb");

// Kontrollera anslutningen
if ($db->connect_error){
    echo "Failed to connect to MySQL";
    die();
} 

// Sök en film i databasen med hjälp av dess id
$id = $_GET['id'];

// SQL-fråga för att hämta data
$sql = "SELECT * FROM films WHERE id='$id'";

// Utför frågan
$result = $db->query($sql);

// Hämta resultatet som en associativ array
$film = $result->fetch_assoc();

// print_r($film); die();

?>

<h1>Beställningsformulär</h1>
<h2>Du har beställt: <?php echo $film['title']; ?> </h2>
<h3>Artikelnummer: <?php echo $id; ?> </h3>
<h4>Pris: <?php echo $film['price']; ?> kr </h4>

<form action="#" method="post">
    <h3>Ange din e-post</h3>
    <input type="email" name="email" required> <br><br>
    <input type="submit" name="submit" value="Skicka beställningen">
    <input type="hidden" name="film_id" value="<?php echo $id ?>">
</form>

<?php

// Hantera beställningen
if(isset($_POST['submit'])){

    $film_id = $_POST['film_id'];
    $email   = $_POST['email'];
    
    // Visa bekräftelse 
    echo  "<h1>Beställning från Videobutiken</h1>
    <h2>Film ID: $film_id</h2>
    <h2>Filmen kommer att levereras till: $email</h2>";

    // Övning
    // Spara beställningen i databasen
}

?>