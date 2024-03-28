<?php

echo "<p>Nombre random entre 1 et 100</p>";

for ($i = 0; $i < 10; $i++) {
    echo random_int(0, 100) . " ";
}
