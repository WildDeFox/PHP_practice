<?php
session_start();
//if (!empty($_SESSION)) {
//    echo "$_SESSION[name] $_SESSION[surn], $_SESSION[age]";
//}
echo "<ul>";
if (!empty($_SESSION)) {
    foreach ($_SESSION as $elem) { ?>
        <li><?= $elem ?></li>
    <?php }
}
