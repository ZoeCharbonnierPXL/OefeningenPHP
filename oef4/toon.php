<?php

foreach ($_COOKIE as $key => $value) {
    print($key.': '.$value);
    print('</br>');
    if($key == 'achtergrondkleur') {
        echo "<body bgcolor='$value'>";
    }
}
