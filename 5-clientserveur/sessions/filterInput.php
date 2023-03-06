<?php
$nom = $_SESSION['nom'];
if($nom) {
    echo '<p><code>$nom = </code>' . $nom . '</p>';
} else {
    echo '<p>Pas de valeur "nom" dans la session</p>';
}
