<footer>
    <p>
        <?php
            echo "&copy; Copyright 2024. All rights reserved for Hypotheek Navigtor.";
        ?>
    </p>

    <?php
    date_default_timezone_set('europe/amsterdam');
    echo date("h:i") . "<br>";
    echo date("d-m-y");
?>
</footer>