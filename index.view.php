<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="farm">
    <ul>
        <li><?= $Farmer->rollCall($Farm); ?></li>
        <li>Total amount of animals on the farm:<?= $animalCount ?></li>
        <br/>
        <li><?= $Farmer->rollCall($BirdFarm); ?></li>
        <li>Total amount of birds on the farm::<?= $birdCount ?></li>
    </ul>
</div>
</body>
</html>

