<?php
function escape($data) {
    // Check if $data is null and return an empty string immediately
    if ($data === null) {
        return '';
    }
    $data = htmlspecialchars($data, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}
