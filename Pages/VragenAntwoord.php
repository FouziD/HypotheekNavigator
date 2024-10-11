<?php
    include "../Includes/Header.php";
?>
<body>
    <main>
        <h1>
            Persoonlijke advies
        </h1>
        <h3>
            Welkom bij uw persoonlijke financiële overzicht.<br>
            Op basis van de door u verstrekte informatie hebben we een overzicht samengesteld van uw financiële situatie en mogelijkheden voor het kopen van een woning.
        </h3>
        <div>
        <?php
            //    Zet de antwoorden om in tekst
            echo "<p>Uw Profiel:</p>";
            echo "<p>U naam:</p>" . $_GET["VoorenAchter"];
            echo "<p>Eerdere ervaring:</p>" . $_GET["JaofNee"];
            echo "  <p>Leeftijdscategorie:</p>" . $_GET["Leeftijd"];
            echo "<p>Jaarlijks bruto inkomen:</p>" . $_GET["BrutoInkomen"];
            echo "<p>Arbeidscontract:</p>" . $_GET["VastofFlexibel"];
            echo "<p>Eigen vermogen: [ingevulde vermogenscategorie]</p>" . $_GET["EigenVermogen"];
            echo "<p>Geschatte waarde gewenste woning:</p>" . $_GET["Waarde"];
            echo "<p>Huidige woonsituatie?:</p>" . $_GET["Huidig"];
            echo "<p>Aantal personen:</p> " . $_GET["Aantal"];
            echo "<p>Woning koop plan:</p> " . $_GET["Kopen?"];
            echo "<p>Belangrijkste factor bij aankoop:</p>". $_GET["Belangerijkste"];
            echo "<p>Eerdere aankoop:</p> " . $_GET["Eerdergekocht"];
            echo "<p>Te besteden tijd:</p> " . $_GET["Tijd"];
            echo "<p>Favoriete type woning: [ingevuld woningtype]</p>" . $_GET["Favo"];
            echo "<p>Financieringsvorm:</p> " . $_GET["FinancieringsVorm"];
            echo "<p>Belangrijke informatie bronnen:</p> " . $_GET["Info"];
            echo "<p>Bekendheid regionale huizenmarkt:</p> " . $_GET["Bekend?"];
        ?>
        </div>

        <?php
            include "../Includes/Footer.php";
        ?>
    </main>
</body>