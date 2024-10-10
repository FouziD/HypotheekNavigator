<?php
include "../Includes/Header.php";
?>
<body>
<main>
    <?php
//    Zet de antwoorden om in tekst
                    echo "<h4>1. Voer uw voor en achternaam in:</h4> " . $_GET["VoorenAchter"] . "<br><br>";

                    echo "<h4>2. Heeft u al eerdere ervaring met huizen kopen?:</h4> " . $_GET["JaofNee"] . "<br><br>";

                    echo "<h4>3. Wat is uw leeftijd:</h4> " . $_GET["Leeftijd"] . "<br><br>";

                    echo "<h4>4. Wat is uw jaarlijkse bruto inkomen:</h4> " . $_GET["BrutoInkomen"] . "<br><br>";

                    echo "<h4>5. Heeft u een vast of flexibel arbeidscontract?:</h4> " . $_GET["VastofFlexibel"] . "<br><br>";

                    echo "<h4>6. Hoeveel eigen vermogen kunt u inbrengen?:</h4> " . $_GET["EigenVermogen"] . "<br><br>";

                    echo "<h4>7. Wat is de geschatte waarde van de woning die u wilt kopen?:</h4> " . $_GET["Waarde"] . "<br><br>";

                    echo "<h4>8. Wat is uw huidige woonsituatie?:</h4> " . $_GET["Huidig"] . "<br><br>";

                    echo "<h4>9. Hoeveel personen wonen er momenteel in uw huishouden?:</h4> " . $_GET["Aantal"] . "<br><br>";

                    echo "<h4>10. Bent u van plan om binnen de komende 12 maanden een woning te kopen?:</h4> " . $_GET["Kopen?"] . "<br><br>";

                    echo "<h4>11. Wat is voor u het belangrijkste bij het kopen van een woning?:</h4> " . $_GET["Belangerijkste"] . "<br><br>";

                    echo "<h4>12. Heeft u al eerder een woning gekocht?:</h4> " . $_GET["Eerdergekocht"] . "<br><br>";

                    echo "<h4>13. Hoeveel tijd bent u bereid te besteden aan het zoeken naar een woning?:</h4> " . $_GET["Tijd"] . "<br><br>";

                    echo "<h4>14. Wat is uw favorieten type woning:</h4> " . $_GET["Favo"] . "<br><br>";

                    echo "<h4>15. Welke financieringsvorm overweegt u voor de aankoop van uw woning?:</h4> " . $_GET["FinancieringsVorm"] . "<br><br>";

                    echo "<h4>16. Wat is uw belangrijkste bron van informatie bij het kopen van een woning?:</h4> " . $_GET["Info"] . "<br><br>";

                    echo "<h4>17. Bent u bekend met de huidige huizenmarkt in uw regio?:</h4> " . $_GET["Bekend?"] . "<br><br>";

                    ?>
</main>
</body>