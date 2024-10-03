<?php
include "../Includes/Header.php";
?>
<body>
<main>
    <?php
                    echo "Voer uw voor en achternaam in: " . $_GET["VoorenAchter"] . "<br><br>";

                    echo "Heeft u al eerdere ervaring met huizen kopen?: " . $_GET["JaofNee"] . "<br><br>";

                    echo "Wat is uw leeftijd: " . $_GET["Leeftijd"] . "<br><br>";

                    echo "Reden voor uitschrijven: " . $_GET["SelectReden"] . "<br><br>";

                    echo "Leerjaar: " . $_GET["LJ"] . "<br><br>";
                    ?>
</main>
</body>