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
            $totaal = 0;
          foreach ($_POST as $key => $value)
          {

              if (substr($key, 0, 5) == "count")
              {
                  $totaal += $value;
              }

          }
            switch ($totaal)
            {
                case ($totaal <= 60);
                    include "adviezen/advies_1.php";
                    break;
                case ($totaal > 60 && $totaal <= 120);
                    include "adviezen/advies_2.php";
                    break;
            }

        echo "Het totaal is: " . $totaal;
          ?>
        </div>

        <?php
            include "../Includes/Footer.php";
        ?>
    </main>
</body>