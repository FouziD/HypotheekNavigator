<?php
/**
 * User: T. de Wit, F. Dada
 * Date: 20 - 9 - 2024
 * File: header.php
 */
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <title>
        <?php
        echo 'HypotheekNavigator';
        date_default_timezone_set('Europe/Amsterdam');
        ?>
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Styles/Stylesheet.css" rel="stylesheet">
    <link href="../Styles/Stylesheet.css" rel="stylesheet">
</head>
<body>
<?php
    $homeurl = "http://localhost/Project_thema3/";
?>
<header>
    <ul>
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
</header>
