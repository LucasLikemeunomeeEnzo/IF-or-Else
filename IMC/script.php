<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="phpcss.css">
    <title>Resultado</title>
</head>
<body>
    <center>
    <div class="back">
<?php

$kg = $_POST['kg'];
$alt = $_POST['alt'];

$re = $kg / ($alt * $alt);

if ($re < 18.5){
    echo "<br>Abaixo do peso";
} 
else if ($re >= 18.5 && $re <= 24.9){
    echo "<br>Peso normal";
}
else if ($re >= 25 && $re <= 29.9){
    echo "<br>Excesso de peso";
}
else if ($re >= 30 && $re <= 34.9){
    echo "<br>Obesidade I";
}
else if ($re >= 35 && $re <= 39.9){
    echo "<br>Obesidade II";
}
else if ($re >= 40){
    echo "<br>Obesidade III";
}

?>
    </div>
    </center>
</body>
</html>