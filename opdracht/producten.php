<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include 'includes/menu.php';?>
    <title>Title</title>
  </head>
    <form action="producten.php" method="get"><!-- dit laten staan! -->

    <p>Hieronder een lijst met producten die je bij ons kunt bestellen en de prijs per stuk:</p>
    <?php 
    
    $producten = array("appels", "peren", "aardbei", "mango", "meloen", "aardappel", "banaan", "wortel", "prei", "ui", "bosui");
    $prijs = array(0.25, 0.30, 0.10, 0.40, 1.20, 0.15, 0.30, 0.20, 0.10, 0.50, 0.30);
    
    getKorting();

    function getPrijs(){
        
    }

    function getKorting(){
    $leeftijd = $_GET['leeftijd'];
    switch ($leeftijd) {
        case 19:
          echo "0,19";
          break;
        case 18:
          echo "0,18";
          break;
        case 17:
          echo "0,17";
          break;
        case 16:
          echo "0,16";
          break;
        case $leeftijd < 16:
          echo "1,00";
          break;
        default:
          echo "Uw Korting";
      }
}

    ?>
    <p>Vul hieronder het productnummer in van het product wat je wilt bestellen en de hoeveelheid.</p> 
    <p><label>productnummer: </label><input type="text" name="productnummer"> &nbsp;&nbsp;<label>aantal: </label><input type="text" name="aantal"></p><!-- dit laten staan! -->
    
    <p>Vul je leeftijd in voor korting</p>
    <p><label>leeftijd: </label><input type="text" name="leeftijd"></p><!-- dit laten staan! -->
    <p><button type="submit" name="submit">Bereken totaal</button></p><!-- dit laten staan! -->
    <p>voor <?php getAmount(); ?> x het product: <?php getProductNr(); ?> betaal je:</p>
    <p>je bent <?php getAge(); ?> je korting is: </p>

    </form><!-- dit laten staan! -->
    <footer><?php include 'includes/footer.php'; ?></footer>
  </body>
</html>