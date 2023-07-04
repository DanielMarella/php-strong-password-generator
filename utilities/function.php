
<?php 

function random_string($length) {
    $str = random_bytes($length);
    $str = base64_encode($str);
    $str = substr($str, 0, $length);
    return $str;
}

?>