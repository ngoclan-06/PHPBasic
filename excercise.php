<?php
function docFile($filename) {
    $file = fopen($filename, "r");
    $filetext = fread($file, filesize($filename));
    fclose($file);
    return $filetext;
}

function countt($sentence){
    $result = substr_count($sentence, '.');
    return $result;
    
} 

function checkValidString($string) {
    $pos = strpos($string, "book");
    $pos1 = strpos($string, "restaurant");

    if ($pos === false && $pos1 !== false) {
        return true;
    }
    if ($pos !== false && $pos1 === false) {
        return true;
    }
    return false;

}

$a = "file1.txt";
$b = "file2.txt";

echo docFile($a);
echo "<br>";
echo docFile($b);
echo "<br>";


if (checkValidString(docFile($a))) {
    echo '<br>Chuỗi hợp lệ. chuỗi '.$a. ' bao gồm '.countt(docFile($a)). ' câu <br>';
}
if (checkValidString(docFile($b))) {
    echo '<br>Chuỗi hợp lệ. chuỗi '.$b. ' bao gồm '.countt(docFile($b)). ' câu <br>';
}
echo '<br>Chuỗi không hợp lệ.';


      