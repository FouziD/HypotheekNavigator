<!--
name: Tristan Van de Wit, Fouzi Dada
Date: 20-09-2024

De vragenlijst van Hypotheek Navigator
-->
<?php
include "../Includes/Header.php";
?>
<body>
<main>
    <form action="VragenAntwoord.php" method="get">
        <h4>
            1. Voer uw voor en achternaam in<br>
            <input type="text" name="VoorenAchter"  required>
        </h4>
        <h4>
            2. Heeft u al eerdere ervaring met huizen kopen?<br>Ja
            <input type="radio" name="JaofNee" value="Ja" checked>
           Nee <input type="radio" name="JaofNee" value="nee">
        </h4>
        <h4>
            3. Wat is uw leeftijd<br>
            <input type="number" name="Leeftijd" required>
        </h4>
        <h4>
            4. Wat is uw jaarlijkse bruto inkomen<br>
            <select name="BrutoInkomen">
                <option value="Minder dan €30.000">Minder dan €30.000</option>
                <option value="€30.000 - €50.000">€30.000 - €50.000</option>
                <option value="€50.000 - €75.000">€50.000 - €75.000</option>
                <option value="€75.000 - €100.000">€75.000 - €100.000</option>
                <option value="Meer dan €100.000">Meer dan €100.000</option>
            </select>
        </h4>
        <h4>
            5. Heeft u een vast of flexibel arbeidscontract?<br>
            <select name="VastofFlexibel" >
                <option value="Vast contract">Vast contract</option>
                <option value="Flexibel contract">Flexibel contract</option>
                <option value="Zelfstandig ondernemer">Zelfstandig ondernemer</option>
                <option value="Anders">Anders</option>
            </select>
        </h4>
        <h4>
            6. Hoeveel eigen vermogen kunt u inbrengen?<br>
            <select name="EigenVermogen">
                <option value="Minder dan €10.000">Minder dan €10.000</option>
                <option value="€10.000 - €25.000">€10.000 - €25.000</option>
                <option value="€25.000 - €50.000">€25.000 - €50.000</option>
                <option value="€50.000 - €100.000">€50.000 - €100.000</option>
                <option value="Meer dan €100.000">Meer dan €100.000</option>
            </select>
        </h4>
        <h4>
            7. Wat is de geschatte waarde van de woning die u wilt kopen?<br>
            <select name="Waarde">
                <option value="Minder dan €200.000">Minder dan €200.000 </option>
                <option value="€200.000 - €300.000">€200.000 - €300.000 </option>
                <option value="€300.000 - €400.000">€300.000 - €400.000 </option>
                <option value="€400.000 - €500.000">€400.000 - €500.000 </option>
                <option value="Meer dan €500.000">Meer dan €500.000 </option>
            </select>
        </h4>
        <h4>
            8. Wat is uw huidige woonsituatie?<br>
            <select name="Huidig">
                <option value="Huurwoning">Huurwoning </option>
                <option value="Koopwoning">Koopwoning </option>
                <option value="Bij ouders/wederzijdse">Bij ouders/wederzijdse </option>
                <option value="Anders">Anders </option>
            </select>
        </h4>
        <h4>
            9. Hoeveel personen wonen er momenteel in uw huishouden?<br>
            <input type="number" name="Aantal" required>
        </h4>
        <h4>
            10. Bent u van plan om binnen de komende 12 maanden een woning te kopen?<br>
            Ja,zeker<input type="radio" name="Kopen?" value="Ja,zeker" checked>
            Misschien<input type="radio" name="Kopen?" value="Misschien">
            Nee<input type="radio" name="Kopen?" value="Nee">
        </h4>
        <h4>
           11. Wat is voor u het belangrijkste bij het kopen van een woning?<br>
            <input type="text" name="Belangerijkste" required>
        </h4>
        <h4>
            12. Heeft u al eerder een woning gekocht?<br>
            Ja<input type="radio" name="Eerdergekocht" value="Ja" checked>
            Nee <input type="radio" name="Eerdergekocht" value="nee">
        </h4>
        <h4>
            13. Hoeveel tijd bent u bereid te besteden aan het zoeken naar een woning?<br>
            <select name="Tijd">
                <option value="Minder dan een maand">Minder dan een maand</option>
                <option value="1-3 maanden">1-3 maanden</option>
                <option value="3-6 maanden">3-6 maanden</option>
                <option value="Langer dan 6 maanden">Langer dan 6 maanden</option>
            </select>
        </h4>
        <h4>
            14. Wat is uw favorieten type woning<br>
            <input type="text" name="Favo" required>
        </h4>
        <h4>
            15. Welke financieringsvorm overweegt u voor de aankoop van uw woning?<br>
            <select name="FinancieringsVorm">
                <option value="Hypotheek">Hypotheek</option>
                <option value="Eigen middelen">Eigen middelen</option>
                <option value="Combinatie van beide">Combinatie van beide</option>
                <option value="Anders">Anders</option>
            </select>
        </h4>
        <h4>
            16. Wat is uw belangrijkste bron van informatie bij het kopen van een woning?<br>
            <input type="text" name="Info" required>
        </h4>
        <h4>
            17. Bent u bekend met de huidige huizenmarkt in uw regio?<br>
            ja,zeker<input type="radio" name="Bekend?" value="Ja,zeker" checked>
            Enigszins<input type="radio" name="Bekend?" value="Enigszins">
            Nee<input type="radio" name="Bekend?" value="Nee">
        </h4>
       <input type="submit">
    </form>
</main>
</body>