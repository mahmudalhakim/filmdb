<?php

/**********************************************
 *       order-form.php
 *       Skriptet hanterar en GET-request
 *       och visar ett beställningsformulär
 **********************************************/

// Infoga sidhuvud 
include_once 'header.php';

// Infoga DB-Skript
require_once 'db.php';

// Sök en film i databasen med hjälp av dess id
$id = $_GET['id'];

// SQL-fråga för att hämta data
$sql = "SELECT * FROM films WHERE id='$id'";

// Utför frågan
$result = $db->query($sql);

// Hämta resultatet som en associativ array
$film = $result->fetch_assoc();

// print_r($film); die;

$title = $film['title'];
$price = $film['price'];
$image = $film['image'];

?>

<h2 class="text-center">Beställningsformulär</h2>
<h3 class="text-center">
    Du har beställt: 
    <?php echo $title; ?>  
    <br>
    Artikelnummer: 
    <?php echo $id; ?>  
    <br>
    Pris: 
    <?php echo $price; ?>kr
</h3>

<form action="order-process.php" method="post" class="text-center">

    <input type="email" name="email" 
    required class="w-50 form-control my-2 d-inline " 
    placeholder="Ange din e-post">

    <input type="submit" name="submit"
    class="w-50 form-control my-2 btn btn-outline-success" 
    value="Skicka beställningen">

    <input type="hidden" name="film_id" value="<?php echo $id ?>">
</form>

<?php
    // Infoga sidfot
    require_once 'footer.php';
?>