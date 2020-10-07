<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $s = 360;
    $v = 90;
    ?>

    <p>Jarak Kota A - Z = <?= $s ?> Km</p>
    <p>Kecepatan Motor = <?= $v ?> Km/Jam</p>
    <p>Waktu Tempuh = ?</p>
    <p>
        Jawaban : <?php
                    $t = $s / $v;
                    $menit = $t * 60;
                    echo $menit;
                    ?> Menit
    </p>
</body>

</html>