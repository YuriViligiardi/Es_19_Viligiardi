<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Radio Button</title>
</head>
<body>
    <?php
    $domanda = "Qual è il pianeta più vicino al sole?";
    $risposte = ["Venere", "Terra", "Marte", "Mercurio", "Giove"];
    $nameRadioB = "Risposta";
    echo "<p><b><i>$domanda</i></b></p>";
    createRadioButton($risposte, $nameRadioB);

        function createRadioButton($array, $name){
            foreach ($array as $elem) {
                echo "<input type='radio' name='$name'>";
                echo "<label for='$elem'>$elem</label>";
                echo "<br>";
            }
        }
    ?>
</body>
</html>