<?php

for ($i= 1; $i <= 5; $i++) {
    echo "<li>$i</li>";
}

$arr = ['text1', 'text2', 'text3'];

echo "<select>";
foreach ($arr as $elem) {
    echo "<option>$elem</option>";
}
echo "</select>";