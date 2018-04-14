<?php
require_once 'parts/header.php';

$persoon = $_POST['persoon'];
$dier = $_POST['dier'];
$land = $_POST['land'];
$vervelen = $_POST['vervelen'];
$speelgoed = $_POST['speelgoed'];
$spijbel = $_POST['spijbel'];
$geld = $_POST['geld'];
$bezigheid = $_POST['bezigheid'];

?>
<div class="WhitePBG">
    <h1>Er heerst paniek...</h1>
    <p>Er heerst paniek in het koninkrijk <?= $land ?>. Koning <?= $spijbel ?> is ten einde raad en als koning <?=$spijbel?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?=$persoon?>.</p>
    <p>"<?=$persoon?>! Het is een ramp! het is een schande!"</p>
    <p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
    <p>"Mijn <?=$dier?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?=$speelgoed?> voor hem gekocht!"</p>
    <p>"Majesteit, uw schildpad komt vast vanzelf weer terug?"</p>
    <p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?=$bezigheid?> leren?"</p>
    <p>"Maar Sire, daar kunt u toch uw <?=$geld?> voor gebruiken."</p>
    <p>"<?=$persoon?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
    <p>"Mij vervelen, Sire."</p>
</div>