<?php

if (is_array($_SERVER)) {
    if (array_key_exists('SERVER_NAME', $_SERVER)) {
        $host = strtolower($_SERVER['SERVER_NAME']);
    }
} else {
    $host = getHostname();
}

return $host;
