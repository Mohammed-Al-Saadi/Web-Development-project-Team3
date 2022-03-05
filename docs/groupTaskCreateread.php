<?php

echo "<h2>Checking if file exists or not</h2>";
if (file_exists("header.php")){
    echo "file exisits";
}
else 
    echo "file not found";


    echo "<hr><h2>  Open the file using appropriate mode </h2>";
    $file = fopen('file.txt','r') or die ("Failed to create a file");
    fclose($file);
    echo "Open ";

    echo "<hr><h2> use fwrite/fread function to write/read on the file your team name and members name.</h2>";
    $file = fopen('team3.txt', 'r') or die ("Failed to read file");
    $text = fread($file, 30);
    echo $text;
    fclose($file);




    $file = fopen("team3.txt", "w") or die("Unable to open file!");
$text = "<br>hello world";
fwrite($file, $text);
echo $text;
fclose($file);
    
    ?>