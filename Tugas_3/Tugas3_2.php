<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $awal = 150000;
    $bunga = 12.5;
    ?>
    <p>Tabungan Awal = Rp <?= $awal ?></p>
    <p>Bunga Setahun = <?= $bunga ?> %</p>
    <p>Total Tabungan Setahun = ?</p>
    <p>Jawaban : Rp
        <?php
        $total = $awal + ($awal * $bunga / 100);
        echo $total;
        ?>
    </p>
</body>

</html>