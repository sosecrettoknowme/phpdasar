<?php

// Pengulangan pada array
// for / foreach
$angka = [3,11,56,2,67,55];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .kotak {
            width : 50px;
            height : 50px;
            background-color : silver;
            text-align : center;
            line-height: 50px;
            float: left;

        }
        .clear {
            clear: both;
        }
    </style>
    <title>Latihan 2</title>
</head>
<body>
    <?php for ( $i = 0; $i < count($angka); $i++) :?>
        <div class="kotak"><?php echo $angka[$i];  ?></div>
    <?php endfor; ?>

    <div class="clear"></div>

    <?php foreach ( $angka as $a ): ?>
        <div class="kotak"><?php echo $a; ?></div>
    <?php endforeach; ?>
</body>
</html>