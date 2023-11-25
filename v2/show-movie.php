<!-- En kolumn för responsiv layout -->
<div class="col-sm-6 col-md-4 col-lg-3 col-xl-2">
    
    <!-- En card-komponent för att visa filminformation -->
    <div class="card m-2">
        <!-- Bilden på filmen -->
        <img class="card-img-top" 
             src="images/<?php echo $image?>" alt="">

        <!-- Card body innehåller filmens information -->
        <div class="card-body text-center">
            <!-- Rubrik med filmens titel och pris -->
            <h4 class="card-title"> 
                <?php echo $title ?> <br>
                Pris: <?php echo "$price kr" ?> 
            </h4>
            <!-- 
                Länk med GET-Request till en beställningssida 
                t.ex. order-form.php?id=1 
            -->
            <a class="btn btn-outline-info mt-2"
                href="order-form.php?id=<?php echo $id ?>">
                Köp 
            </a>
        </div> <!-- card-body -->
    </div> <!-- card -->
</div> <!-- col -->