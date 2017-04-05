<?php

header ("Content-type: image/jpeg");
$image = imagecreatefromjpeg("6410.jpg");
imagejpeg($image);
?>