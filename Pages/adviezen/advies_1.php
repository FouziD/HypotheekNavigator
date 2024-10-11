<!--
name: Tristan Van de Wit, Fouzi Dada
Date: 20-09-2024

De vragenlijst van Hypotheek Navigator
-->
<?php
include "../../Includes/Header.php";
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
        echo "<p>Uw Profiel:</p> ". "";
        echo "  <p>Leeftijdscategorie:</p>" . "[ingevulde leeftijdscategorie]";

        echo "<p>Jaarlijks bruto inkomen: [ingevulde inkomenscategorie]</p>";
        echo "<p>Arbeidscontract: [ingevuld contracttype]</p>";
        echo "<p>Eigen vermogen: [ingevulde vermogenscategorie]</p>";
        echo "<p>Uw Woonwensen:</p>";
        echo "<p>Geschatte waarde gewenste woning: [ingevulde waardecategorie]</p>";
        echo "<p>
        Favoriete type woning: [ingevuld woningtype]
    </p>";
        echo "<p>
        Belangrijkste factor bij aankoop: [ingevulde factor]
    </p>";
    ?>
    </div>

</main>
<?php
include "../../Includes/Footer.php";
?>
</body>