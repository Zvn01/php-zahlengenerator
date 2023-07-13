<!DOCTYPE html>
<html>
<head>
    <title>Lottogenerator</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <!--Einfügen des Bildes-->

    <div id="header">
        <img src="lotto_suisse.jpg" alt="Lotto Suisse" />
    </div>
    
    <div id="content">
    <h1>Lottogenerator</h1>
    
    <!--Formular erstellen-->
    
    <form method="post" action="index.php">
        <label>Anzahl der Felder:</label>
        <input type="number" name="felder" min="1" max="10" required>
        <input type="submit" value="Generieren">
    </form>

    <!--Lottoskript-->

    <?php
    
    //Funktion welche die Lottozahlen generiert

    function generateLottoNumbers($count) {
        $numbers = range(1, 42);
        shuffle($numbers);
        return array_slice($numbers, 0, $count);
    }

    //Prüfen ob Formular ausgefüllt, Zahlen an Funktion generateLottoNumbers schicken und ausgeben

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $felder = intval($_POST["felder"]);
        if ($felder > 0) {
            for ($i = 1; $i <= $felder; $i++) {
                $lottoNumbers = generateLottoNumbers(6);
                $glueckszahl = generateLottoNumbers(1)[0];

                echo "<h2>________________</h2>";
                echo "<p>";
                foreach ($lottoNumbers as $index => $number) {
                    echo $number;
                    if ($index < 5) {
                        echo " ";
                    }
                }
                echo "</p>";
                echo "<p>Glückszahl: <span class='glueckszahl'>$glueckszahl</span></p>";
            }
        } 
        else {
            echo "<p>Ungültige Anzahl der Felder.</p>";
        }
    }
    ?>

    <!--Zurücksetzen Button-->

    <a href="index.php">Zurücksetzen</a>
</div>

</body>
</html>
