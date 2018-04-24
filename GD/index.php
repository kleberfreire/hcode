<?php

header("content-Type: image/png");

$image = imagecreatefromjpeg("imagens".DIRECTORY_SEPARATOR."certificado.jpg");


$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext($image, 32, 0, 320, 250,$titleColor ,"fonts". DIRECTORY_SEPARATOR . "Bevan" . DIRECTORY_SEPARATOR ."Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($image, 32, 0, 375, 350, $titleColor, "fonts" . DIRECTORY_SEPARATOR . "Playball" . DIRECTORY_SEPARATOR . "Playball-Regular.ttf", "CERTIFICADO");

imagestring($image, 3, 450, 370, utf8_decode("Concluído em:").date("d/m/y"), $titleColor);

header("content-Type: image/jpeg");

imagejpeg($image);

imagedestroy($image)


?>