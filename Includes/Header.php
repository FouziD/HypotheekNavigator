<!--
name: Tristan Van de Wit, Fouzi Dada
Date: 3-10-2024

De header van de homepage van Hypotheek Navigator
-->
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        <?php
            //Zet de tijdzone in EU/ Amsterdam
            echo 'HypotheekNavigator';
            date_default_timezone_set('Europe/Amsterdam');
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Styles/Stylesheet.css" rel="stylesheet">
    <link href="../Styles/Stylesheet.css" rel="stylesheet">
    <link href="../../Styles/Stylesheet.css" rel="stylesheet">
</head>
<body>
    <?php
        // Maakt de homepagina index.php
        $homeurl = "http://localhost/Project_thema3/";
    ?>
    <header>
        <ul>
            <!--Maakt linken-->
            <li>
                <a href="<?php echo $homeurl; ?>">Homepage</a>
            </li>
            <li>
                <a href="<?php echo $homeurl; ?>pages/OverOns.php"> Over Ons</a>
            </li>
            <li>
                <a href="<?php echo $homeurl; ?>pages/VragenLijst.php">Vragenlijst</a>
            </li>
            <li>
                <img id="logo" src="<?php echo $homeurl; ?>images/IconOnly_Transparent_NoBuffer.png" alt="logo">
            </li>
        </ul>

        <!--Maakt een klok-->
        <p id="tijd">
            <?php
                date_default_timezone_set('europe/amsterdam');
                echo  date("h:i") . "<br>";
                echo date("d-m-y");
            ?>
        </p>
    </header>
