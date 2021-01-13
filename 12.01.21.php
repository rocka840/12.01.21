<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>12.01.21</title>
</head>
<body>

<form action="12.01.21.php" method="get">
    <input type="submit" name="Submit">
</form>

<?php
if(isset($_GET["submit"])){
    $file=fopen("flowerData.txt", "r");
    $validline=[];
    while($line=fgets($file)){
        $array= explode("|", $line);
        if(sizeof());
    }
    
    fclose($file);
    print $array;
}
?>


</body>
</html>