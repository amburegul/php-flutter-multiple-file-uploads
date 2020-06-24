<?php 
$img = ['jpg', 'jpeg', 'png', 'bmp'];
$doc = ['zip', 'rar', 'pdf', 'doc', 'docx', 'xls','xlsx','ppt','pptx'];
$whitelistExt = array_merge($img, $doc);
foreach ($_POST['attachment'] as $key => $value)
{
    $fn = $value->fileName;
    $ext = pathinfo($fn, PATHINFO_EXTENSION);
    $f = base64_decode($value->encoded);
    file_put_contents("uploads/".$fn, $f);
}