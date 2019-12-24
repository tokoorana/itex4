<body>

<?php
$fp = @fopen('project/counter.txt', 'a+');
if($fp) {
    $counter = fgets($fp,10);
    fclose($fp);
    if (empty($counter)) {
        $counter = 0;  
    }
} else {
    $counter = 0; //если не существует файла
}
$counter ++;

echo $counter;
$fp = @fopen('project/counter.txt', 'w+');
fwrite($fp, $counter);
fclose($fp);


?>
</body>