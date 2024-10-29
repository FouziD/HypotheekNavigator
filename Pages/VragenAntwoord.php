<?php
    include "../Includes/Header.php";
?>
<body>
    <main>
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
            // Telt de punt die worden aangegeven bij de vragen lijst van mim 50 en max 180 punten is
            switch ($totaal)
            {
                // In het geval dat de score tussen bepaalde punten is dan stuurt die de gebruiker naar een van de 5 adviezen.
                case ($totaal <= 60);
                    include "adviezen/advies_1.php";
                    break;
                case ($totaal > 60 && $totaal <= 110);
                    include "adviezen/advies_2.php";
                    break;
                case ($totaal > 110 && $totaal <= 140);
                    include "adviezen/advies_3.php";
                    break;
                case ($totaal > 140 && $totaal <= 160);
                    include "adviezen/advies_4.php";
                    break;
                case ($totaal > 160 && $totaal <= 180);
                    include "adviezen/advies_5.php";
                    break;
            }
          ?>
        </div>

        <?php
            include "../Includes/Footer.php";
        ?>
    </main>
</body>