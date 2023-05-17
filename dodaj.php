<?php
 
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

<div> 
   <center><h1> Dodaj do MENU <h1><center><br>
   <div class="section-menu-items">
    <form action = "add.php" method="post">


Potrawa
<input type="text" name="potrawa">
Cena
<input type="text" name="cena"><br>
<button>Dodaj</button>
</div>
<div class="c">
    <center><h2>Kontakt tylko stacjnarny<center>
</div>

</body>
</html> 