<?php 
$conn = mysqli_connect('localhost','admin','admin1234','restauracjaa');
if ( !$conn ) {
    echo 'Błąd połączenia z bazą danych, Error: ' . mysqli_connect_error(); }
        else {
        $sql = 'SELECT potrawa, cena FROM menu';
        $result = mysqli_query($conn, $sql);         
        $menu = mysqli_fetch_all($result, MYSQLI_ASSOC);
        // //print_r($menu); 
        // foreach($menu as $elem) {
        //     echo $elem['potrawa'] . ' ' . $elem['cena'] . '<br>';
        // }
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
   
    <center><img src="1.jpg" alt="restauracja"><center>

<section>
<nav>
<ul>
<li><a href="index.php">Strona główna</a></li>
<li><a href="dodaj.php">Dodaj</a></li>
<li><a href="link">Usuń</a></li>
</ul>
</nav>
</section>
    </header>

<div> 
    <CENTER><H1> MENU <H1></CENTER>
    <?php 
    echo 'Połączono z baza danych' ;
    mysqli_close($conn);
    ?>
<h1>
    <center><div class="section-menu-items">
        <?php foreach ($menu as $elem) { ?>
            <div class="section-menu-item">
            <div class="section-menu-item-name">
                <?php
                echo htmlspecialchars($elem['potrawa']);
                ?>
            </div>
            <div class="section-menu-item-price">
                <?php
                echo htmlspecialchars($elem['cena']).'zł';
                ?>
            </div>
        </div>
        <?php } ?>
        </div>
        </center>



</div>
<div class="c">
    <center><h2>Kontakt tylko stacjnarny<center>
</div>
</body>
</html> 

<?php } ?>