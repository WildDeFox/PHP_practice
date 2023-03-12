<?php
$arr = [
    ['href'=>'page1.html', 'text'=>'text1'],
    ['href'=>'page2.html', 'text'=>'text2'],
    ['href'=>'page3.html', 'text'=>'text3'],
];
foreach ($arr as $elem) {
    echo "<li><a href=\"$elem[href]\">$elem[text]</a></li>";
}

$arr1 = [
    ['value' => '1', 'text' => 'text1'],
    ['value' => '2', 'text' => 'text2'],
    ['value' => '3', 'text' => 'text3'],
];
echo "<select>";
foreach ($arr1 as $elem) {
    echo "<option value='$elem[value]'>$elem[text]</option>";
}
echo "</select>";