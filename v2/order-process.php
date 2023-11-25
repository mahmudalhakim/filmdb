<?php

/**********************************************
 *       order-process.php
 *       Skriptet hanterar formulärdata från
 *       order-form.php
 *     
 **********************************************/

require_once 'header.php';

if(isset($_POST['submit'])){

    $film_id = $_POST['film_id'];
    $email   = $_POST['email'];
    
    echo  "<h1>Beställning från Videobutiken</h1>
    <h2>Film ID: $film_id</h2>
    <h2>Filmen kommer att levereras till: $email</h2>";
}

// Övning
// Spara beställningen i databasen

require_once 'footer.php';