<?php
require_once 'parts/header.php';
?>

<h1>Er heerst paniek...</h1>
<form method="post" action="paniek.php" class="formr">
    <p>Welk dier zou je nooit als huisdier willen? <input type="text" name="dier" required></p>
    <p>Wie is de belangrijkste persoon in je leven? <input type="text" name="persoon" required></p>
    <p>In welk land zou je graag willen wonen? <input type="text" name="land" required></p>
    <p>wat doe je als je je verveelt? <input type="text" name="vervelen" required></p>
    <p>Met welk speelgoed speelde je als kind het meest? <input type="text" name="speelgoed" required></p>
    <p>Bij welke docent spijbel je het liefst? <input type="text" name="spijbel" required></p>
    <p>Als je €100.000,- had, wat zou je dan kopen? <input type="text" name="geld" required></p>
    <p>Wat is je favoriete bezigheid? <input type="text" name="bezigheid" required></p>
    <input class="btnRegister" type="submit" value="submit">
</form>