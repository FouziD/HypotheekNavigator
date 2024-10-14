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
        <!-- Maakt een form aan die naar het bestand VragenAntwoord.php-->
        <form action="VragenAntwoord.php" method="post">
            <h4>
                <!-- Maakt de vragen aan-->
                1. Voer uw voor en achternaam in
                <!--Maakt de input type textbox aan daar kun je van alles invullen-->
                <input type="text" name="VoorenAchter"  required>
            </h4>
            <h4>
                <!-- Maakt de vragen aan-->
                2. Heeft u al eerdere ervaring met huizen kopen?
                <!-- Geeft je keuze tussen 2 of meer-->
                Ja <input type="radio" name="JaofNee" value="Ja" checked>
               Nee <input type="radio" name="JaofNee" value="nee">
            </h4>
            <h4>
                <!-- Maakt de vragen aan-->
                3. Wat is uw leeftijd
                <!-- Geeft je meerdere keuzes-->
                <select name="countLeeftijd">
                    <option value="10">18 jaar t/m 25 jaar</option>
                    <option value="20">30 jaar t/m 55 jaar</option>
                    <option value="30">55 jaar t/m 75 jaar</option>
                </select>
            </h4>
            <h4>
                <!-- Maakt de vragen aan-->
                4. Wat is uw jaarlijkse bruto-inkomen
               <!-- Geeft je meerdere keuzes-->
                <select name="countBrutoInkomen">
                    <option value="10">Minder dan €30.000</option>
                    <option value="20">€30.000 - €50.000</option>
                    <option value="30">€50.000 - €75.000</option>
                    <option value="40">€75.000 - €100.000</option>
                    <option value="50">Meer dan €100.000</option>
                </select>
            </h4>
            <h4>
                <!-- Maakt de vragen aan-->
                5. Heeft u een vast of flexibel arbeidscontract?
                <!-- Geeft je meerdere keuzes-->
                <select name="countVastofFlexibel" >
                    <option value="10">Vast contract</option>
                    <option value="20">Flexibel contract</option>
                    <option value="30">Zelfstandig ondernemer</option>
                </select>
            </h4>
            <h4>
                <!-- Maakt de vragen aan-->
                6. Hoeveel eigen vermogen kunt u inbrengen?
                <!-- Geeft je meerdere keuzes-->
                <select name="countEigenVermogen">
                    <option value="10">Minder dan €10.000</option>
                    <option value="20">€10.000 - €25.000</option>
                    <option value="30">€25.000 - €50.000</option>
                    <option value="40">€50.000 - €100.000</option>
                    <option value="50">Meer dan €100.000</option>
                </select>
            </h4>
            <h4>
                <!-- Maakt de vragen aan-->
                7. Wat is de geschatte waarde van de woning die u wilt kopen?
                <!-- Geeft je meerdere keuzes-->
                <select name="countWaarde">
                    <option value="10">Minder dan €200.000 </option>
                    <option value="20">€200.000 - €300.000 </option>
                    <option value="30">€300.000 - €400.000 </option>
                    <option value="40">€400.000 - €500.000 </option>
                    <option value="50">Meer dan €500.000 </option>
                </select>
            </h4>
            <h4>
                <!-- Maakt de vragen aan-->
                8. Wat is uw huidige woonsituatie?
                <!-- Geeft je meerdere keuzes-->
                <select name="Huidig">
                    <option value="Huurwoning">Huurwoning </option>
                    <option value="Koopwoning">Koopwoning </option>
                    <option value="Bij ouders/wederzijdse">Bij ouders/wederzijdse </option>
                    <option value="Anders">Anders </option>
                </select>
            </h4>
            <h4>
                <!-- Maakt de vragen aan-->
                9. Hoeveel personen wonen er momenteel in uw huishouden?
                <!-- keuze tussen aantal nummers-->
                <select name="Aantal">
                    <option value="alleen">1 Persoon</option>
                    <option value="koppel">2 Personen</option>
                    <option value="family">3 Personen</option>
                    <option value="gezin">4 Personen</option>
                </select>
            </h4>
            <h4>
                <!-- Maakt de vragen aan-->
                10. Bent u van plan om binnen de komende 12 maanden een woning te kopen?
                <!-- Geeft je keuze tussen 2 of meer-->
                Ja, zeker<input type="radio" name="Kopen?" value="Ja,zeker" checked>
                Nee<input type="radio" name="Kopen?" value="Nee">
            </h4>
            <h4>
                <!-- Maakt de vragen aan-->
               11. Wat is voor u het belangrijkste bij het kopen van een woning?
                <!--Maakt de input type textbox aan daar kun je van alles invullen-->
                <input type="text" name="Belangerijkste" required>
            </h4>
            <h4>
                <!-- Maakt de vragen aan-->
                12. Heeft u al eerder een woning gekocht?
                <!-- Geeft je keuze tussen 2 of meer-->
                Ja<input type="radio" name="Eerdergekocht" value="Ja" checked>
                Nee <input type="radio" name="Eerdergekocht" value="nee">
            </h4>
            <h4>
                <!-- Maakt de vragen aan-->
                13. Hoeveel tijd bent u bereid te besteden aan het zoeken naar een woning?
                <!-- Geeft je meerdere keuzes-->
                <select name="Tijd">
                    <option value="Minder dan een maand">Minder dan een maand</option>
                    <option value="1-3 maanden">1-3 maanden</option>
                    <option value="3-6 maanden">3-6 maanden</option>
                    <option value="Langer dan 6 maanden">Langer dan 6 maanden</option>
                </select>
            </h4>
            <h4>
                <!-- Maakt de vragen aan-->
                14. Wat is uw favorieten type woning
                <!--Maakt de input type textbox aan daar kun je van alles invullen-->
                <input type="text" name="Favo" required>
            </h4>
            <h4>
                <!-- Maakt de vragen aan-->
                15. Bent u bekend met de huidige huizenmarkt in uw regio?
                <!-- Geeft je keuze tussen 2 of meer-->
                Ja,zeker<input type="radio" name="Bekend?" value="Ja,zeker" checked>
                Enigszins<input type="radio" name="Bekend?" value="Enigszins">
                Nee<input type="radio" name="Bekend?" value="Nee">
            </h4>
            <!-- Stuurt u door naar een andere pagina-->
           <input type="submit">
            <br><br><br><br><br>
        </form>


    </main>
    <?php
        include "../Includes/Footer.php";
    ?>
</body>