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
        <table>
            <tr>
                <th>#</th>
                <th>product</th>
                <th>prijs per stuk</th>
            </tr>
            <tr>
                <td>0</td>
                <td>appels</td>
                <td>0,25</td>
            </tr>
            <tr>
                <td>1</td>
                <td>peren</td>
                <td>0,30</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Aardbei</td>
                <td>0,10</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Mango</td>
                <td>0,40</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Meloen</td>
                <td>1,20</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Aardappel</td>
                <td>0,15</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Banaan</td>
                <td>0,30</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Wortel</td>
                <td>0,20</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Prei</td>
                <td>0,10</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Ui</td>
                <td>0,50</td>
            </tr>
            <tr>
                <td>10</td>
                <td>Bosui</td>
                <td>0,30</td>
            </tr>
        </table>

    <p>Vul hieronder het productnummer in van het product wat je wilt bestellen en de hoeveelheid.</p> 
    <p><label>productnummer: </label><input type="text" name="productnummer"> &nbsp;&nbsp;<label>aantal: </label><input type="text" name="aantal"></p><!-- dit laten staan! -->
    
    <p>Vul je leeftijd in voor korting</p>
    <p><label>leeftijd: </label><input type="text" name="leeftijd"></p><!-- dit laten staan! -->
    <p><button type="submit" name="submit">Bereken totaal</button></p><!-- dit laten staan! -->
    <p>voor <?php getAmount(); ?> x het product: <?php getProductNr(); ?> betaal je:</p>
    <p>je bent <?php getAge(); ?> je korting is: </p>

    </form><!-- dit laten staan! -->
  </body>
</html>