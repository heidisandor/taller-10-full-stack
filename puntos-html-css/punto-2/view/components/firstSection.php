<?php include "./controller/initDataController.php"?>

<section>
    <h2> Primera suma de números: </h2>    
    <div class= "numbers_content">
        <h3><?php echo  FIRST_NUMBER; ?></h3>
        <h3>+</h3>
        <h3><?php echo  $secondNumber; ?></h3> 
    </div>
    <div>
        <h3>El resultado es:</h3>
        <h2> <?php echo  $result . "\n"; ?> </h2>
    </div>

</section>