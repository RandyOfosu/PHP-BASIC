<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'includes/menu.php';?>
    <?php include 'includes/functions.php';?>
    <title>Title</title>
  </head>
    <form action="producten.php" method="get"><!-- dit laten staan! -->

    <p>Hieronder een lijst met producten die je bij ons kunt bestellen en de prijs per stuk:</p>
    <table>
    <?php 
    
    $producten = array("appels", "peren", "aardbei", "mango", "meloen", "aardappel", "banaan", "wortel", "prei", "ui", "bosui");
    $prijs = array(0.25, 0.30, 0.10, 0.40, 1.20, 0.15, 0.30, 0.20, 0.10, 0.50, 0.30);

    for($i = 0; $i < 10; $i++) {
       echo "<tr>" . "<td>" . "$i. " . $producten[$i] . "</td><td>" . $prijs[$i] . "</td></tr>";
    } 

    ?>
    </table>
    <p>Vul hieronder het productnummer in van het product wat je wilt bestellen en de hoeveelheid.</p> 
    <p><label>productnummer: </label><input type="text" name="productnummer"> &nbsp;&nbsp;<label>aantal: </label><input type="text" name="aantal"></p><!-- dit laten staan! -->
    
    <p>Vul je leeftijd in voor korting</p>
    <p><label>leeftijd: </label><input type="text" name="leeftijd"></p><!-- dit laten staan! -->
    <p><button type="submit" name="submit">Bereken totaal</button></p><!-- dit laten staan! -->
    <p>voor <?php getAmount(); ?> x het product: <?php getProductNr(); ?> betaal je:</p> <?php getTotaal() ?>
    <p>je bent <?php getAge(); ?> je korting is: </p> <?php getKorting() ?>

    </form><!-- dit laten staan! -->
    <footer><?php include 'includes/footer.php'; ?></footer>
  </body>
</html>