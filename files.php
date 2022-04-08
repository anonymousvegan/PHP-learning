<?php
    // echo "<pre>";
    // echo readfile("summary.txt"); //works, but....
    // echo "</pre>" 
    //the better way:
    $f = fopen("summary.txt", "r") or die("unable to  open file!");
    echo fread($f, 10); //12 bits
    echo "<br>";
    fclose($f);
    //line by line
    $f = fopen("testfile.txt", "r");
    while(!feof($f)){
        echo fgets($f) . "<br>";
    }
    fclose($f);
    //char by char : 
    $f = fopen("testfile.txt", "r");
    while(!feof($f)){
        echo fgetc($f) . "<br>";
    }
    fclose($f);
    $f = fopen("new_file.txt", "w");
    $txt = "Hello, this is new file";
    fwrite($f, $txt);
    fclose($f);
    $f = fopen("new_file.txt", "r");
    echo fread($f, filesize("new_file.txt"));
    fclose($f);
?>  