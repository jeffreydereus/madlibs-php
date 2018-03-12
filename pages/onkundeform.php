<?php
require_once "parts/header.php";
?>
<h1>Onkunde</h1>
<form method="post" action="onkunde.php">
    <p>Wat zou je graag willen kunnen? <input type="text" name="kunnen" required></p>
    <p>Met welke persoon kun je goed opschieten?? <input type="text" name="opschieten" required></p>
    <p>Wat is je favoriete getal? <input type="text" name="getal" required></p>
    <p>Wat heb je altijd bij je als je op vakantie gaat? <input type="text" name="vakantie" required></p>
    <p>Wat is je beste persoonlijke eigenschap? <input type="text" name="gschap" required></p>
    <p>Wat is je slechste persoonlijke eigenschap? <input type="text" name="sschap" required></p>
    <p>Wat is het ergste dat je kan overkomen? <input type="text" name="overkomen" required></p>
    <input class="btnRegister" type="submit" value="submit">
</form>

<?php
require_once "parts/footer.php";
?>