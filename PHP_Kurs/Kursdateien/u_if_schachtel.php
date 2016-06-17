<html>
<body>
<?php

$preisN = 1.35;
$preisS = 1.40;
$preisD = 1.10;
$menge = $_POST["Menge"];

$totalN = $menge * $preisN;
$totalS = $menge * $preisS;
$totalD = $menge * $preisD;

If ($_POST["Sorte"] == "N")
    echo $menge . " Liter Normal kosten " . $totalN . " $";
    
    else if ($_POST["Sorte"] == "S")
        echo $menge . " Liter Normal kosten " . $totalS . " $";

    else if ($_POST["Sorte"] == "D")
        echo $menge . " Liter Normal kosten " . $totalD . " $";

    else
        echo "Eingegebene Sorte ist nicht verfügbar.";
?>
</body>
</html>